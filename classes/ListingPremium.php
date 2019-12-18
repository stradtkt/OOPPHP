<?php

class ListingPremium extends ListingBasic
{
    private $status = 'premium';
    private $description;
    protected $allowed_tags = '<p><br><b><strong><em><u><ol><ul><li>';

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($value)
    {
        $this->description = trim(strip_tags($value, $this->allowed_tags));
    }
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Cleans up and sets the local property $status
     * @param string $value to set property
     */
    public function setStatus($value)
    {
        if (empty($value)) {
            $this->status = 'basic';
            return;
        }
        $this->status = trim(filter_var($value, FILTER_SANITIZE_STRING));
    }
}