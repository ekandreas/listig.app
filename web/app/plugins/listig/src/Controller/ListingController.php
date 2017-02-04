<?php
namespace EkAndreas\Listig\Controller;

use EkAndreas\Listig\Model\ListingModel;
use EkAndreas\Listig\Route\Base;
use EkAndreas\Listig\Route\RouteInterface;

class ListingController implements RouteInterface
{
    public static function routes()
    {
        Base::post('/listing/(?P<id>\d+)', __CLASS__ . '@save');
    }

    public function save(\WP_REST_Request $request)
    {
        $listing = new ListingModel($request->get_json_params());
        $listing->save();
        return $listing;
    }

}
