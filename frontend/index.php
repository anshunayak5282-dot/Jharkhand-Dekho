<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
    <title>Jharkhand Dekho</title>
</head>
<body>
   <header>
   <!-- top section of web page-->
   <div class="navbar">
        <div class="logo">
         <img src="Jhar_dekho.jpg" alt="" width="80">
         <h1>Jharkhand Dekho</h1>
         </div>
      <div class="icons">
         <ul>
           <a href="index.php"> <li>Home</li></a>
            <a href=""><li>Search</li></a>
            <li>Blog</li>
            <a href="booking.html"><li>Booking</li></a>
            <?php if(isset($_SESSION['user']))
            { ?>
              <!-- <li>Welcome <?php echo $_SESSION['user'];?></li>   all php new line -->

            <a href="/jharkhand/backend/logout.php"><li>Logout</li></a>
            <?php } else { ?>
                       <a href="login.html"><li>Log-in</li></a>

            <!-- <a href="booking.html"><li>Booking</li></a> -->
            <?php } ?>
            
         </ul>
      </div>
      <div class="menu-btn">
            <i class="fa-solid fa-bars"></i>
            
         </div>
   </div>
   
    <div class="slide-section">
          <div class="all-item">
            <div class="text">
                 <h1>Discover Jharkhand</h1>
                 <div class="text-para">
                 <p>Discover Jharkhand – The Land of Waterfalls and Wonders!
                         Plan your trip,<br> explore hidden gems, and connect with trusted travel guides — all in one place. 🌿✨</p>
                         </div>
               </div>
            <div class="date-time-section">
                           <div class="destination">
                              <input type="text"placeholder="Destination">
                              
                           </div>
                           
                           <!-- <div class="time-date">
                              <input type="date" placeholder="Date">
                           </div>
                           <div class="no-person">
                              <input type="number" placeholder="No of person">
                           </div> -->
                           <div class="find-button">
                              <button>Find Tour Package</button>
                           </div>
                         </div>
                     </div>    
        </div>


         
                   <div class="card-container">
            
                     <div class="place-had">
                        <h1>Popular Tour Package's</h1>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem inventore assumenda doloremque praesentium ipsa! Aliquid porro est, officiis iste aliquam nemo eos possimus eaque commodi. Hic vitae recusandae repellendus. Reprehenderit!</p>-->
                     </div>
                  <div href="" class="card-item">
                     
                     <div class="card">
                        <!-- <a href="booking.html"> -->
                        <div class="card-img">
                           <img src="https://www.godigit.com/content/dam/godigit/directportal/en/chhinnamasta-temple.jpg" alt="">
                        </div>
                        <div class="card-content">
                           <div class="heading">
                              <h2>Temples</h2>
                           </div>
                           <div class="para">
                              <p>Startin at-$8000</p>
                              <div class="rating">
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              </div>
                           </div>
                           <div class="button">
                              <a href="booking.html"><button>View More</button></a>
                           </div>
                        </div>
                        
                  </div>
                   <div class="card">
                     
                        <div class="card-img">
                           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCd7dvJ-QUiB3CZCFfa2Q-iPhWyES9KyWwMw&s" alt="">
                        </div>
                        <div class="card-content">
                           <div class="heading">
                              <h2>Falls</h2>
                           </div>
                           <div class="para">
                              <p>Startin at-$8000</p>
                              <div class="rating">
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              </div>
                           </div>
                           <div class="button">
                              <a href="booking.html"><button>View More</button></a>
                           </div>
                        </div>
                  </div>
                   <div class="card">
                        <div class="card-img">
                           <img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/Pine_trees_of_Netarhat_Hill_station.jpg" alt="">
                        </div>
                        <div class="card-content">
                           <div class="heading">
                              <h2>Hill Station</h2>
                           </div>
                           <div class="para">
                              <p>Startin at-$8000</p>
                              <div class="rating">
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              </div>
                           </div>
                           <div class="button">
                              <a href="booking.html"><button>View More</button></a>
                           </div>
                        </div>
                  </div>
                  <div class="card">
                        <div class="card-img">
                           <img src="https://growbilliontrees.com/cdn/shop/files/Grow-billion-trees-home-slide-1_8a913242-e8b2-47fb-acab-e4a6c9beda8c.jpg?v=1688202042&width=1500" alt="">
                        </div>
                        <div class="card-content">
                           <div class="heading">
                              <h2>Forest</h2>
                           </div>
                           <div class="para">
                              <p>Startin at-$8000</p>
                              <div class="rating">
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              </div>
                           </div>
                           <div class="button">
                             <a href="booking.html"><button>View More</button></a>
                           </div>
                        </div>
                  </div>
                  <div class="card">
                        <div class="card-img">
                           <img src="https://bigcatsindia.com/wp-content/uploads/2018/06/Royal-Bengal-Tiger.jpg" alt="">
                        </div>
                        <div class="card-content">
                           <div class="heading">
                              <h2>Zoo</h2>
                           </div>
                           <div class="para">
                              <p>Startin at-$8000</p>
                              <div class="rating">
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              </div>
                           </div>
                           <div class="button">
                             <a href="booking.html"><button>View More</button></a>
                           </div>
                        </div>
                  </div>
                  <div class="card">
                        <div class="card-img">
                           <img src="https://s7ap1.scene7.com/is/image/incredibleindia/Adventure-Sports-in-Ranchi2-popular?qlt=82&ts=1726723884261" alt="">
                        </div>
                        <div class="card-content">
                           <div class="heading">
                              <h2>Dams</h2>
                           </div>
                           <div class="para">
                              <p>Startin at-$8000</p>
                              <div class="rating">
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              </div>
                           </div>
                           <div class="button">
                              <a href="booking.html"><button>View More</button></a>
                           </div>
                        </div>
                  </div>
                  <div class="card">
                        <div class="card-img">
                           <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Ranchi_9239.JPG/362px-Ranchi_9239.JPG" alt="">
                        </div>
                        <div class="card-content">
                           <div class="heading">
                              <h2>City</h2>
                           </div>
                           <div class="para">
                              <p>Startin at-$8000</p>
                              <div class="rating">
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              </div>
                           </div>
                           <div class="button">
                              <a href="booking.html"><button>View More</button></a>
                           </div>
                        </div>
                  </div>
                  <div class="card">
                        <div class="card-img">
                           <img src="https://www.livehindustan.com/lh-img/uploadimage/library/2023/09/03/16_9/16_9_6/jharkhand_parasnath_is_wonderful_confluence_of_spirituality_and_tourism_good_accommodation_arrangeme_1693761575.jpg" alt="">
                        </div>
                        <div class="card-content">
                           <div class="heading">
                              <h2>Tracking</h2>
                           </div>
                           <div class="para">
                              <p>Startin at-$8000</p>
                              <div class="rating">
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              </div>
                           </div>
                           <div class="button">
                              <a href="booking.html"><button>View More</button></a>
                           </div>
                        </div>
                  </div>
               </div>  
               </a>
               
                </div>

                   <!-- hiiii -->
                    <div class="card-container">
                     <div class="place-had">
                        <h1>Stay With Comfort</h1>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem inventore assumenda doloremque praesentium ipsa! Aliquid porro est, officiis iste aliquam nemo eos possimus eaque commodi. Hic vitae recusandae repellendus. Reprehenderit!</p>-->
                     </div>
                  <div class="card-item">
                     <div class="card">
                        <div class="card-img">
                           <img src="https://images.trvl-media.com/lodging/5000000/4440000/4431500/4431470/43140556.jpg?impolicy=fcrop&w=1200&h=800&quality=medium" alt="">
                        </div>
                        <div class="card-content">
                           <div class="heading">
                              <h2>Taj Hotel</h2>
                           </div>
                           <div class="para">
                              <p>Fromr rs 8000</p>
                              <div class="rating">
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              </div>
                           </div>
                           <div class="button">
                              <button>View more</button>
                           </div>
                        </div>
                  </div>  
                   <div class="card">
                        <div class="card-img">
                           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ77C9PyNObX2nJBTntLEVwfGUbniiIxP--lA&s" alt="">
                        </div>
                        <div class="card-content">
                           <div class="heading">
                              <h2>CoutYard</h2>
                           </div>
                           <div class="para">
                              <p>Fromr rs 8000</p>
                              <div class="rating">
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              </div>
                           </div>
                           <div class="button">
                              <button>View more</button>
                           </div>
                        </div>
                  </div>
                   <div class="card">
                        <div class="card-img">
                           <img src="https://mountail.in/wp-content/uploads/2025/03/DSC03867-1-scaled.webp" alt="">
                        </div>
                        <div class="card-content">
                           <div class="heading">
                              <h2>Villege</h2>
                           </div>
                           <div class="para">
                              <p>Fromr rs 8000</p>
                              <div class="rating">
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              </div>
                           </div>
                           <div class="button">
                              <button>View More</button>
                           </div>
                        </div>
                  </div>
                  <div class="card">
                        <div class="card-img">
                           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPIcFKVcQL_Um0m5XfkFO0ludGfRWZhIj3hQ&s" alt="">
                        </div>
                        <div class="card-content">
                           <div class="heading">
                              <h2>Radisson Blue</h2>
                           </div>
                           <div class="para">
                              <p>Fromr rs 8000</p>
                              <div class="rating">
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              <li class="fa-solid fa-star"></li>
                              </div>
                           </div>
                           <div class="button">
                              <button>View More</button>
                           </div>
                        </div>
                  </div>
                  </div>
                
                         <!-- footer section -->
                   <footer>
                     <div class="panel">
                        <div class="footer-items">
                           <div class="footer-item-column">
                              <h2 class="service-heading">Jharkhand dekho</h2>
                              <ul class="service-links">
                                 <!-- <li><a href="#">Customer Support</a></li>
                                 <li><a href="#">Service Gurantee</a></li>
                                 <li><a href="#">More Service Info</a></li>
                                 <li><a href="#">Email-jharkhand_dekho@gmail.com</a></li> -->
                                 <li>We work pro-actively to provide an <br> incredible experience in every single trip <br> we create, so you can have memories <br> worth taking home.</li>
                                 <div class="social-media">
                                    <a href="https://www.instagram.com/ll_.mr_anshu_ll/?__pwa=1" target="_blank">
                                    <i  class="fa-brands fa-instagram"></i>
                                    </a>
                                    
                                    <a href="https://www.linkedin.com/in/anshuman-nayak-a47384370/" target="_blank">
                                    <i class="fa-brands fa-linkedin"></i>
                                    </a>

                                    <i class="fa-brands fa-youtube"></i>
                                 </div>
                                 <!-- <li><a href="#">home</a></li> -->
                              </ul>
                           </div>
                           <div class="footer-item-column">
                              <h2 class="service-heading-2">About</h2>
                              <ul class="service-links">
                                 <li>About Jharkhand dekho.com</li>
                                 <li>News</li>
                                 <li>About Jharkhand Dekho.com Group</li>
                              </ul>
                           </div>
                           <div class="footer-item-column">
                              <h2 class="service-heading-3">Other Service</h2>
                              <ul class="service-links">
                                 <li>Investor Relationship</li>
                                 <li>Jharkhand Dekho.com Reward</li>
                                 
                                 <li>All Hotels</li>
                                 <li>Security</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <hr>
                     <div class="page-rights">
                           <!-- <h3>@ 2025 Jharkhand Dekho.All rights reserved</h3> -->
                            <p>@ 2025 Jharkhand Dekho. All rights reserved</p>
                           <p>Created By Anshuman</p>
                     </div>

                   </footer>
                   

           
               

   </body>
  </html>