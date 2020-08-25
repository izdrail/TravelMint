<?php


namespace LzoMedia\TravelMint;
use linclark\MicrodataPHP\MicrodataPhp;
use LzoMedia\TravelMint\Objects\Property;
use Symfony\Component\DomCrawler\Crawler;


/**
 * Class TravelMintClient
 * @package LzoMedia\TravelMint
 */
class TravelMintClient
{

    protected $base_url = 'https://travelminit.ro';

    protected $dom;


    /**
     * @method extract()
     * @description Extracts the information from the website
     * @param int $page
     * @param int $max
     * @return Property[]
     */
    public function extract($page = 1, $max = 295){

        for ($i=$page; $i < $max; $i++){

            $data = file_get_contents($this->base_url. '/ro/cazare?p=' . $i);

            $crawler = new Crawler($data);

            $nodeValues = $crawler->filter('span.name > a.product_click')->each(function (Crawler $node, $i) {

                return $node->attr('href');

            });

            $results = [];

            foreach ($nodeValues as $url){

                $md = new MicrodataPhp($this->base_url . $url);

                array_push($results, new Property($md->obj()));


            }

            return $results;

        }

    }
}
