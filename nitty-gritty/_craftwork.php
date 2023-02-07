<?php

    $craftwork_projects = array(

        "Project 1" => array(

           "top_matter" => array(
               "desc" => "In this <a href='https://google.com' target='_blank'>project</a> I did the following things.",
               "location" => "New Haven",
               "date" => "May 1, 2022"
           ),
           "content" => array(
                array(
                    "img" => $BASE_URL."/img/alice-home.jpg",
                    "title" => "The blah blah",
                    "details" => "These are the details for project 1a.",
                    "credit" => "Joe Blow"
                ),
                array(
                    "img" => $BASE_URL."/img/placeholder-front.jpg",
                    "title" => "The blabbity blue",
                    "details" => "These are the details for project 1b.",
                    "credit" => "Joe Schmoe"
                )
            )
        ),
        "Project 2" => array(

            "top_matter" => array(
                "desc" => "In this project I did these other following things.",
                "location" => "New York",
                "date" => "April 1, 2022"
            ),
            "content" => array(
                 array(
                    "img" => $BASE_URL."/img/placeholder-front.jpg",
                    "title" => "The blah blah",
                    "details" => "These are the details for project 1a.",
                    "credit" => "John Smith"
                 ),
                 array(
                    "img" => $BASE_URL."/img/alice-home.jpg",
                    "title" => "The blabbity blue",
                    "details" => "These are the details for project 1b.",
                    "credit" => "Tim Dimm"
                 )
            )
        )
    );

?>