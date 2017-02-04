<?php
namespace EkAndreas\Listig\Model;

class ListingModel
{
    const postType = "listig";

    public $id = 0;
    public $name = '';
    public $private = false;
    public $description = '';

    /**
     * ListingModel constructor.
     * @param stdClass | int $args
     */
    public function __construct($args)
    {
        if(is_array($args)) {
            $this->name = $args['name'];
            $this->description = $args['description'];
            $this->private = $args['private'];
        }

        if (is_integer($args)) {
            $post = get_post($args);
            $object = json_decode($post->post_content);
            $this->name = $object->name;
            $this->description = $object->description;
            $this->private = $object->private;
        }
    }

    public function save()
    {
        if ($this->id == 0) {
            $this->id = wp_insert_post([
                'post_content' => json_encode($this),
                'post_type' => $this::postType,
                'post_status' => 'publish',
            ]);
            return $this;
        }

        wp_update_post([
            'post_content' => json_encode($this),
        ]);

        return $this;
    }
}
