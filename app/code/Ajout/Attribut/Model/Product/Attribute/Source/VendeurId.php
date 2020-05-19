<?php
namespace Ajout\Attribut\Model\Product\Attribute\Source;
class VendeurId extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

/**
* getAllOptions
*
* @return array
*/
public function getAllOptions()
{
$this->_options = [
'id'=>'hhhhhhhhhhhh'
];
return $this->_options;
}
}
