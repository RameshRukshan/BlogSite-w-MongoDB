<?php

require 'vendor/autoload.php'; // Load the MongoDB PHP library

function insertRecord($title, $description, $author) {
    global $database; 

    $collection = $database->selectCollection('your_collection_name');

    $data = [
        'title' => $title,
        'description' => $description,
        'author' => $author,
        'system_date' => new MongoDB\BSON\UTCDateTime() 
    ];

    $result = $collection->insertOne($data);
    return $result->getInsertedId();
}


function getRecordById($id) {
    global $database;

    $collection = $database->selectCollection('your_collection_name');

    $document = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
    return $document;
}


function updateRecord($id, $title, $description, $author) {
    global $database;

    $collection = $database->selectCollection('your_collection_name');

    $data = [
        'title' => $title,
        'description' => $description,
        'author' => $author,
        'system_date' => new MongoDB\BSON\UTCDateTime() 

    $result = $collection->updateOne(['_id' => new MongoDB\BSON\ObjectID($id)], ['$set' => $data]);
    return $result->getModifiedCount();
}


function deleteRecord($id) {
    global $database;

    $collection = $database->selectCollection('your_collection_name');

    $result = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
    return $result->getDeletedCount();
}


function loginUser($username, $password) {
    global $mongoDbUri;

    try {
        $mongoClient = new MongoDB\Client($mongoDbUri);
        $database = $mongoClient->selectDatabase($mongoDbDatabase);
        $collection = $database->selectCollection('user');

        $user = $collection->findOne(['username' => $username]);

        if ($user) {
            
            if (password_verify($password, $user['password'])) {
                
                return true;
            }
        }

  
        return false;

    } catch (MongoDB\Driver\Exception\ConnectionException $e) {

        echo "Error connecting to MongoDB: " . $e->getMessage();
        return false;
    } catch (Exception $e) {

        echo "An error occurred: " . $e->getMessage();
        return false;
    }
}


try {

    $mongoClient = new MongoDB\Client($mongoDbUri);

    $database = $mongoClient->selectDatabase($mongoDbDatabase);
    $collection = $database->selectCollection('blog');

    function createBlogPost($title, $description, $author) {
        global $collection;

        $data = [
            'title' => $title,
            'description' => $description,
            'author' => $author,
            'system_date' => new MongoDB\BSON\UTCDateTime() 
        ];

        $result = $collection->insertOne($data);
        return $result->getInsertedId();
    }


    function getBlogPostById($id) {
        global $collection;

        $blogPost = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
        return $blogPost;
    }


    function updateBlogPost($id, $title, $description, $author) {
        global $collection;

        $data = [
            'title' => $title,
            'description' => $description,
            'author' => $author,
            'system_date' => new MongoDB\BSON\UTCDateTime()
        ];

        $result = $collection->updateOne(['_id' => new MongoDB\BSON\ObjectID($id)], ['$set' => $data]);
        return $result->getModifiedCount();
    }


    function deleteBlogPost($id) {
        global $collection;

        $result = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
        return $result->getDeletedCount();
    }

} catch (MongoDB\Driver\Exception\ConnectionException $e) {
    echo "Error connecting to MongoDB: " . $e->getMessage();
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}



try {
    $mongoClient = new MongoDB\Client($mongoDbUri);

    $database = $mongoClient->selectDatabase($mongoDbDatabase);
    $collection = $database->selectCollection('blog');

    function searchBlogs($searchTerm) {
        global $collection;

        $searchQuery = [
            '$or' => [
                ['title' => new MongoDB\BSON\Regex($searchTerm, 'i')],
                ['author' => new MongoDB\BSON\Regex($searchTerm, 'i')],
            ]
        ];

        $result = $collection->find($searchQuery);

        $blogs = iterator_to_array($result);

        return $blogs;
    }

} catch (MongoDB\Driver\Exception\ConnectionException $e) {
    echo "Error connecting to MongoDB: " . $e->getMessage();
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}

?>