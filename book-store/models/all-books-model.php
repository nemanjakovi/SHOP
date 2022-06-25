<?php

/**
 * Function return all books.
 * @return array
 */

// function getAllBooks()
// {
//    
//        
//        
//      
//         
     
//   
//       
//         [
//             "id" => 10,
//             "title" => "Laravel: Up & Running",
//             "description" => "What sets Laravel apart from other PHP web frameworks?
//             Speed and simplicity, for starters. 
//             This rapid application development framework and its ecosystem of tools 
//             let you quickly build new sites and applications with clean, 
//             readable code. Fully updated to cover Laravel 5.8, 
//             the second edition of this practical guide provides the definitive introduction to one of today’s
//             mostpopular web frameworks.",
//             "img" => "./public/theme/img/41SKdYdrI2L._SX379_BO1,204,203,200_.jpg",
//             "price" => 2250.00,
//             "category" => "Literature",
//             "author" => "Matt Stauffer",
//             "available" => true
//         ], [
//             "id" => 11,
//             "title" => "The Celestin Prophecy ",
//             "description" => "In the rain forests of Peru, an ancient manuscript has been discovered. 
//             Within its pages are 9 key insights into life itself -- insights each human being is predicted to grasp sequentially; 
//             one insight, then another, as we move toward a completely spiritual culture on Earth. 
//             Drawing on ancient wisdom, it tells you how to make connections among the events 
//             happening in your life right now and lets you see what is going to happen to you in the years to come.",
//             "img" => "./public/theme/img/91KcHDeP+EL.jpg",
//             "price" => 1237.00,
//             "category" => "Psychology",
//             "author" => "James Redfield",
//             "available" => true
//         ], [
//             "id" => 12,
//             "title" => "Talking to Strangers",
//             "description" => "The routine traffic stop that ends in tragedy. 
//             The spy who spends years undetected at the highest levels of the Pentagon. The false conviction of Amanda Knox. 
//             Why do we so often get other people wrong? Why is it so hard to detect a lie, 
//             read a face or judge a stranger's motives?",
//             "img" => "./public/theme/img/41x1ipVdvYS.jpg",
//             "price" => 1180.00,
//             "category" => "Psychology",
//             "author" => "Malcolm Gladwell",
//             "available" => true
//         ],
//         [
//             "id" => 13,
//             "title" => "Crime and Punishment",
//             "description" => "Raskolnikov, a destitute and desperate former student,
//              wanders through the slums of St Petersburg and commits a random murder without remorse or regret.
//               He imagines himself to be a great man, a Napoleon: acting for a higher purpose beyond conventional moral law. 
//              ",
//             "img" => "./public/theme/img/7144.jpg",
//             "price" => 1500.00,
//             "category" => "Classic",
//             "author" => "Fyodor Dostoevsky",
//             "available" => true
//         ],
//         [
//             "id" => 14,
//             "title" => "The Shack",
//             "description" => "Mackenzie Allen Philips' youngest daughter, Missy, 
//             has been abducted during a family vacation and evidence that she may have been brutally 
//             murdered is found in an abandoned shack deep in the Oregon wilderness. 
//             Four years later in the midst of his Great Sadness, Mack receives a suspicious note, 
//             apparently from God, inviting him back to that shack for a weekend.",
//             "img" => "./public/theme/img/index.jpg",
//             "price" => 1350.00,
//             "category" => "Drama",
//             "author" => "William P. Young",
//             "available" => true
//         ], [
//             "id" => 15,
//             "title" => "Then She Was Gone",
//             "description" => "It’s been ten years since Ellie disappeared, but Laurel has never given up hope of finding her daughter.
//             And then one day a charming and charismatic stranger called Floyd walks into a café and sweeps Laurel off her feet.
//             Before too long she’s staying the night at this house and being introduced to his nine year old daughter.
//             Poppy is precocious and pretty - and meeting her completely takes Laurel's breath away.",
//             "img" => "./public/theme/img/35297426.jpg",
//             "price" => 1350.00,
//             "category" => "Drama",
//             "author" => "Lisa Jewell",
//             "available" => true
//         ],
//         [
//             "id" => 16,
//             "title" => "Click",
//             "description" => "Olive wants to get in on the act . . . Any act! 
//             Olive “clicks” with everyone in the fifth grade—until one day she doesn’t. 
//             When a school variety show leaves Olive stranded without an act to join, 
//             she begins to panic, wondering why all her friends have already formed their own groups . . . 
//             without her. With the performance drawing closer by the minute, 
//             will Olive be able to find her own place in the show before the curtain comes up? ",
//             "img" => "./public/theme/img/51wnmnkVaoL._SX342_BO1,204,203,200_.jpg",
//             "price" => 1350.00,
//             "category" => "Drama",
//             "author" => "Kayla Miller",
//             "available" => true
//         ],
//         [
//             "id" => 17,
//             "title" => "Matilda",
//             "description" => "Matilda is a little girl who is far too good to be true. 
//             At age five-and-a-half she's knocking off double-digit multiplication problems and blitz-reading Dickens. 
//             Even more remarkably, her classmates love her even though she's a super-nerd and the teacher's pet.
//              But everything is not perfect in Matilda's world...",
//             "img" => "./public/theme/img/297602.jpg",
//             "price" => 1000.00,
//             "category" => "Kids",
//             "author" => "Roald Dahl",
//             "available" => true
//         ],
//         [
//             "id" => 18,
//             "title" => "The Missing Piece",
//             "description" => "It was missing a piece.
//              And it was not happy. What it finds on its search for the missing piece is simply and touchingly told. 
//              This inventive and heartwarming book can be read on many levels, 
//              and Silverstein’s iconic drawings and humor are sure to delight fans of all ages.
//             So it set off in search
//             of its missing piece.
//             And as it rolled
//             it sang this song—
//             Oh I'm lookin' for my missin' piece
//             I'm lookin' for my missin' piece
//             Hi-dee-ho, here I go,
//             Lookin' for my missin' piece..",
//             "img" => "./public/theme/img/61OK4q0nskL.jpg",
//             "price" => 1300.00,
//             "category" => "Kids",
//             "author" => "Shel Silverstein",
//             "available" => true
//         ],
//         [
//             "id" => 19,
//             "title" => "Peter Pan",
//             "description" => "Peter Pan by J. M. Barrie Peter Pan, 
//             the mischievous boy who refuses to grow up, 
//             lands in the Darling's proper middle-class home to look for his shadow. 
//             He befriends Wendy, John and Michael and teaches them to fly (with a little help from fairy dust). 
//             He and Tinker Bell whisk them off to Never-land where they encounter the Red Indians, the Little Lost Boys, 
//             pirates and the dastardly Captain Hook.",
//             "img" => "./public/theme/img/915YbWIek4L.jpg",
//             "price" => 1300.00,
//             "category" => "Kids",
//             "author" => "J.M. Barrie",
//             "available" => true
//         ],
//         [
//             "id" => 20,
//             "title" => "Predictably Irrational",
//             "description" => "In this newly revised and expanded edition of the groundbreaking New York Times bestseller, 
//             Dan Ariely refutes the common assumption that we behave in fundamentally rational ways. 
//             From drinking coffee to losing weight, from buying a car to choosing a romantic partner, we consistently overpay, 
//             underestimate, and procrastinate. Yet these misguided behaviors are neither random nor senseless.",
//             "img" => "./public/theme/img/51azXiFqujL.jpg",
//             "price" => 1150.00,
//             "category" => "Psychology",
//             "author" => "Dr. Dan Ariely",
//             "available" => true
//         ]


//     ];
// }
