<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchProductController extends Controller
{
    public function searchproduct(Request $request)
    {
        $title = $request->name;

        $shop = auth()->user();
        //   products(query: "title:*Toy Plane*", first: 2) {
            $graphiql_query =
                '{
                 products(query: "title:*'.$title.'*", first: 2) {
                edges{
                  node{
                    id
                    title
                    vendor
                    status
                    images(first: 1) {
                        edges {
                          node {
                            originalSrc
                          }
                        }
                      }
                  }
                }
              }
                }';
            // dd($graphiql_query);
        $products = $shop->api()->graph($graphiql_query);
        $response = ($products['body']['data']['products']['edges']);
        return response()->json($response);
    }
}
