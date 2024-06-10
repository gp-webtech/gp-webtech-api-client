<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListJournalCollection;

class ListJournalCollectionMapper implements SchemaMapperInterface
{
    private ListJournalMapper $listJournalMapper;
    /**
     * @param ListJournalMapper $listJournalMapper
    */
    public function __construct(ListJournalMapper $listJournalMapper)
    {
        $this->listJournalMapper = $listJournalMapper;
    }
    /**
     * @param array $payload
     * @return ListJournalCollection
    */
    public function toSchema(array $payload) : ListJournalCollection
    {
        $items = array();
        foreach ($payload as $payloadItem) {
            $items[] = $this->listJournalMapper->toSchema($payloadItem);
        }
        return new ListJournalCollection(...$items);
    }
}
