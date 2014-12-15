<?php

$myarr = array(
	'total_stud' => 500,
	'1' => array(
		'student' => array(
			'id' => 1,
			'name' => 'Jim Raynor',
			'address' => array(
				'city' => 'Cebu',
				'zip' => '1234'
			)
		)
	),
	'2' => array(
		'student' => array(
			'id' => 2,
			'name' => 'Sarah Kerrigan',
			'address' => array(
				'city' => 'Manila',
				'zip' => '64537'
			)
		)
	)
);



// creating object of SimpleXMLElement
$xml = new SimpleXMLElement("<root />");

// function call to convert array to xml
to_xml($xml, $myarr);

//saving generated xml file
print $xml->asXML();


function to_xml(SimpleXMLElement $object, array $data)
{   
    foreach ($data as $key => $value)
    {   
        if (is_array($value))
        {   
            $new_object = $object->addChild($key);
            to_xml($new_object, $value);
        }   
        else
        {   
            $object->addChild($key, $value);
        }   
    }   
}  