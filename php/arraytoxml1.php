<?php

$myarr = array(
	'total_stud' => 500,
	'one' => array(
		'student' => array(
			'id' => 1,
			'name' => 'Jim Raynor',
			'address' => array(
				'city' => 'Cebu',
				'zip' => '1234'
			)
		)
	),
	'two' => array(
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
$xml_student_info = new SimpleXMLElement("<?xml version=\"1.0\"?><student_info></student_info>");

// function call to convert array to xml
array_to_xml($myarr,$xml_student_info);

//saving generated xml file
print $xml_student_info->asXML();


// function defination to convert array to xml
function array_to_xml($student_info, $xml_student_info) {
    foreach($student_info as $key => $value) {
        if(is_array($value)) {
            if(!is_numeric($key)){
                $subnode = $xml_student_info->addChild("$key");
                array_to_xml($value, $subnode);
            }
            else{
                $subnode = $xml_student_info->addChild("item$key");
                array_to_xml($value, $subnode);
            }
        }
        else {
            $xml_student_info->addChild("$key",htmlspecialchars("$value"));
        }
    }
}