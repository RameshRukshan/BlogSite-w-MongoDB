<?php

$mongoDbUsername = 'adminUser';
$mongoDbPassword = 'Rar123';
$mongoDbDatabase = 'db_hotel_reviews';
$mongoDbCluster = 'ClusterRAR'; 

//mongodb+srv://adminUser:<password>@clusterrar.exfmhqo.mongodb.net/

$mongoDbUri = "mongodb+srv://$mongoDbUsername:$mongoDbPassword@$mongoDbCluster/$mongoDbDatabase";

try {
    
    $mongoClient = new MongoDB\Client($mongoDbUri);

    
    $database = $mongoClient->selectDatabase($mongoDbDatabase);

    $collection = $database->selectCollection('your_collection_name');
    $cursor = $collection->find(['your_query' => 'your_value']);

   
    foreach ($cursor as $document) {
        var_dump($document);
    }

} catch (MongoDB\Driver\Exception\ConnectionException $e) {
    echo "Error connecting to MongoDB: " . $e->getMessage();
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
