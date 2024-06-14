<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListJournalWithAssociationsCollection;

class ListJournalWithAssociationsCollectionMapper implements SchemaMapperInterface
{
    private ListJournalWithAssociationsMapper $listJournalWithAssociationsMapper;
    /**
     * @param ListJournalWithAssociationsMapper $listJournalWithAssociationsMapper
    */
    public function __construct(ListJournalWithAssociationsMapper $listJournalWithAssociationsMapper)
    {
        $this->listJournalWithAssociationsMapper = $listJournalWithAssociationsMapper;
    }
    /**
     * @param array $payload
     * @return ListJournalWithAssociationsCollection
    */
    public function toSchema(array $payload) : ListJournalWithAssociationsCollection
    {
        $items = array();
        foreach ($payload as $payloadItem) {
            $items[] = $this->listJournalWithAssociationsMapper->toSchema($payloadItem);
        }
        return new ListJournalWithAssociationsCollection(...$items);
    }
}
