<?php

class ListingPremium extends ListingBasic
{
    protected $status = 'premium';
    protected $description;
    protected static $allowed_tags = '<p><br><b><strong><em><u><ol><ul><li>';

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
        /**
     * Calls individual methods to set values for object properties.
     * @param array $data Data to set from user or database
     */
    public function setValues($data = []) {
        if (isset($data['id'])) {
            $this->setId($data['id']);
        }
        if (isset($data['title'])) {
            $this->setTitle($data['title']);
        }
        if (isset($data['website'])) {
            $this->setWebsite($data['website']);
        }
        if (isset($data['email'])) {
            $this->setEmail($data['email']);
        }
        if (isset($data['twitter'])) {
            $this->setTwitter($data['twitter']);
        }
        if (isset($data['description'])) {
            $this->setDescription($data['description']);
        }
    }
}