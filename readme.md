#Travelminit Client

This is a client for extracting data from the travel minit website.


```
$factory = new TravelMintClient();

$data = $factory->extract(1,2);

foreach ($data as print_r($hotel){

    print_r($hotel->getTitle());
    print_r($hotel->getPhone());
    print_r($hotel->getImage());
    print_r($hotel->getPrice());
    print_r($hotel->getStreet());
    print_r($hotel->getCity());
    print_r($hotel->getRegion());
    print_r($hotel->getCountry());
    print_r($hotel->getLatitude());
    print_r($hotel->getLongitude());
    print_r($hotel->getHours());
    print_r($hotel->getPayments());
    print_r($hotel->getDescription());

}
```
