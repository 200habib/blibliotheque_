<?php

namespace App\Model;

class SearchModel
{
    private ?string $query = null;

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function setQuery(?string $query): self
    {
        $this->query = $query;
        return $this;
    }
}
