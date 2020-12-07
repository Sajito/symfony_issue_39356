<?php
declare(strict_types=1);

namespace App\Controller;


use App\Model\EntryData;
use Symfony\Component\Serializer\SerializerInterface;

class DefaultController
{
    public function index(SerializerInterface $serializer) {
        $entryDataJson = '{"entries": [ { "dateTime": "2020-12-07T06:30:14.666Z" } ] }';

        $result = $serializer->deserialize($entryDataJson, EntryData::class, 'json');

        \dd($result);
    }
}
