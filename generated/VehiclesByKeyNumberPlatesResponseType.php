<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing VehiclesByKeyNumberPlatesResponseType
 *
 * 
 * XSD Type: vehiclesByKeyNumberPlatesResponse
 */
class VehiclesByKeyNumberPlatesResponseType extends VehiclesByKeyNumberPlatesResponseSrcType
{

    /**
     * @var \Baumeister\TecDocClient\Generated\VehiclesByKeyNumberPlatesRecordType[] $data
     */
    private $data = null;

    /**
     * @var int $status
     */
    private $status = null;

    /**
     * @var string $statusText
     */
    private $statusText = null;

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\VehiclesByKeyNumberPlatesRecordType $array
     */
    public function addToData(\Baumeister\TecDocClient\Generated\VehiclesByKeyNumberPlatesRecordType $array)
    {
        $this->data[] = $array;
        return $this;
    }

    /**
     * isset data
     *
     * @param int|string $index
     * @return bool
     */
    public function issetData($index)
    {
        return isset($this->data[$index]);
    }

    /**
     * unset data
     *
     * @param int|string $index
     * @return void
     */
    public function unsetData($index)
    {
        unset($this->data[$index]);
    }

    /**
     * Gets as data
     *
     * @return \Baumeister\TecDocClient\Generated\VehiclesByKeyNumberPlatesRecordType[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @param \Baumeister\TecDocClient\Generated\VehiclesByKeyNumberPlatesRecordType[] $data
     * @return self
     */
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param int $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusText
     *
     * @return string
     */
    public function getStatusText()
    {
        return $this->statusText;
    }

    /**
     * Sets a new statusText
     *
     * @param string $statusText
     * @return self
     */
    public function setStatusText($statusText)
    {
        $this->statusText = $statusText;
        return $this;
    }


}

