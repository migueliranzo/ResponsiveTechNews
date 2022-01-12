<?php


switch ($i) {
  case 1:
    
?> 
    <a href="article.php?article= <?php echo $row["id"] ?>" class=" container  flex flex-col duration-200 overflow-hidden group cursor-pointer border-l-4 rounded-l-2xl lg:rounded-l-none 
lg:border-l-0 border-r-4 border-t-4 border-b-4 rounded-r-2xl border-dotted  border-blue-600 col-span-2 lg:row-span-2 sm:row-span-1" >

      <div class=" uppercase px-0  md:text-center lg:text-left font-bold pb-1  pt-4  text-xs text-blue-600 duration-300 ease-out bg-white ">
        <?php echo typeToText($row["type"]); ?>
      </div>

      <div class="flex p-0 m-0 bg-white">

        <div class="group-hover:not-italic italic md:text-center lg:text-left duration-300 ease-out font-bold bg-white text-4xl  ">
          <?php echo $row["title"]; ?>
        </div>

      </div>
      <div class="overflow-hidden  my-4">
        <div class="flex flex-1 justify-center pb-1 group-hover:-skew-y-2  group-hover:scale-110  duration-300 ease-out">
          <img src=' <?php echo $row["imgpath"]; ?> ' alt="">
        </div>
      </div>
  </a>

  <?php

    break;

  case 2:

  ?>
   <a href="article.php?article= <?php echo $row["id"] ?> ">
    <div class="  flex flex-col   duration-200 group cursor-pointer border-gray-400 border-solid border-b border-r rounded-b-2xl rounded-l-none hover:border-blue-800
news-card-effect after:ease-out">
      <div class="overflow-hidden rounded-br-2xl "> 
        <div class="flex flex-1  transform group-hover:scale-110 ease-out  duration-300">
          <img src=' <?php echo $row["imgpath"]; ?> ' alt="">
        </div>
        <div class="transform uppercase px-3 pb-1 group-hover:-translate-y-3 pt-3  text-xs  font-bold text-blue-600 duration-300 ease-out bg-white ">
          <?php echo typeToText($row["type"]); ?>
        </div>
        <div class="flex flex-1 border-solid  m-0 pb-8 ">

          <div class="container h-24 px-[1.12rem] border-gray-400 group-hover:border-blue-800 border-solid  transform group-hover:-translate-y-3  duration-300 ease-out bg-white ">
            <?php echo $row["title"]; ?>
          </div>
        </div>
      </div>
    </div>
    </a>
  <?php

    break;

  case 3:
  ?>
   <a href="article.php?article= <?php echo $row["id"] ?> ">
    <div class="  flex flex-col   duration-200 group cursor-pointer border-gray-400 border-solid border-b border-r rounded-b-2xl rounded-l-none hover:border-blue-800
news-card-effect after:ease-out">
      <div class="overflow-hidden">
        <div class="flex flex-1  transform group-hover:scale-110 ease-out  duration-300">
          <img src=' <?php echo $row["imgpath"]; ?> ' alt="">
        </div>
        <div class="transform uppercase px-3 pb-1 group-hover:-translate-y-3 pt-3  text-xs  font-bold text-blue-600 duration-300 ease-out bg-white ">
          <?php echo typeToText($row["type"]); ?>
        </div>
        <div class="flex flex-1 border-solid  m-0 pb-8 ">

          <div class="container h-24 px-[1.12rem] border-gray-400 group-hover:border-blue-800 border-solid  transform group-hover:-translate-y-3  duration-300 ease-out bg-white ">
            <?php echo $row["title"]; ?>
          </div>
        </div>
      </div>
    </div>
    </a>
  <?php
    break;


  case 4:
  ?>
    <a href="article.php?article= <?php echo $row["id"] ?> ">
    <div class="  flex flex-col   duration-200 group cursor-pointer border-gray-400 border-solid border-b border-r rounded-b-2xl rounded-l-none hover:border-blue-800
news-card-effect after:ease-out">
      <div class="overflow-hidden">
        <div class="flex flex-1  transform group-hover:scale-110 ease-out  duration-300">
          <img src=' <?php echo $row["imgpath"]; ?> ' alt="">
        </div>
        <div class="transform uppercase px-3 pb-1 group-hover:-translate-y-3 pt-3  text-xs  font-bold text-blue-600 duration-300 ease-out bg-white ">
          <?php echo typeToText($row["type"]); ?>
        </div>
        <div class="flex flex-1 border-solid  m-0 pb-8 ">

          <div class="container h-24 px-[1.12rem] border-gray-400 group-hover:border-blue-800 border-solid  transform group-hover:-translate-y-3  duration-300 ease-out bg-white ">
            <?php echo $row["title"]; ?>
          </div>
        </div>
        
      </div>
    </div>
    </a>
  <?php
    break;

          
  case 5:
  ?>
     <a href="article.php?article= <?php echo $row["id"] ?> ">
    <div class="  flex flex-col   duration-200 group cursor-pointer border-gray-400 border-solid border-b border-r rounded-b-2xl rounded-l-none hover:border-blue-800
news-card-effect after:ease-out">
      <div class="overflow-hidden">
        <div class="flex flex-1  transform group-hover:scale-110 ease-out  duration-300">
          <img src=' <?php echo $row["imgpath"]; ?> ' alt="">
        </div>
        <div class="transform uppercase px-3 pb-1 group-hover:-translate-y-3 pt-3  text-xs  font-bold text-blue-600 duration-300 ease-out bg-white ">
          <?php echo typeToText($row["type"]); ?>
        </div>
        <div class="flex flex-1 border-solid  m-0 pb-8 ">

          <div class="container h-24 px-[1.12rem] border-gray-400 group-hover:border-blue-800 border-solid  transform group-hover:-translate-y-3  duration-300 ease-out bg-white ">
            <?php echo $row["title"]; ?>
          </div>
        </div>
      </div>
    </div>
    </a>
<?php
    break;

    

    case 6:

     
      ?>
      </div>
        <div class="grid lg:pt-12 auto-cols-max m-0   lg:grid-cols-4 gap-x-5 gap-y-6  grid-cols-2  sm:grid-cols-2 lg:m-0 sm:m-8 md:m-16">
        <a href="article.php?article= <?php echo $row["id"] ?> ">
        <div class="  flex flex-col   duration-200 group cursor-pointer border-gray-400 border-solid border-b border-r rounded-b-2xl rounded-l-none hover:border-blue-800
    news-card-effect after:ease-out ">
          <div class="overflow-hidden">
            <div class="flex flex-1  transform group-hover:scale-110 ease-out  duration-300">
              <img src=' <?php echo $row["imgpath"]; ?> ' alt="">
            </div>
            <div class="transform uppercase px-3 pb-1 group-hover:-translate-y-3 pt-3  text-xs  font-bold text-blue-600 duration-300 ease-out bg-white ">
              <?php echo typeToText($row["type"]); ?>
            </div>
            <div class="flex flex-1 border-solid  m-0 pb-8 ">
    
              <div class="container h-24 px-[1.12rem] border-gray-400 group-hover:border-blue-800 border-solid  transform group-hover:-translate-y-3  duration-300 ease-out bg-white ">
                <?php echo $row["title"]; ?>
              </div>
            </div>
            
          </div>
        </div>
        </a>
      <?php
        break;
        case 7:
          ?>
            <a href="article.php?article= <?php echo $row["id"] ?> ">
            <div class="  flex flex-col  duration-200 group cursor-pointer border-gray-400 border-solid border-b border-r rounded-b-2xl rounded-l-none hover:border-blue-800
        news-card-effect after:ease-out ">
              <div class="overflow-hidden">
                <div class="flex flex-1  transform group-hover:scale-110 ease-out  duration-300">
                  <img src=' <?php echo $row["imgpath"]; ?> ' alt="">
                </div>
                <div class="transform uppercase px-3 pb-1 group-hover:-translate-y-3 pt-3  text-xs  font-bold text-blue-600 duration-300 ease-out bg-white ">
                  <?php echo typeToText($row["type"]); ?>
                </div>
                <div class="flex flex-1 border-solid  m-0 pb-8 ">
        
                  <div class="container h-24 px-[1.12rem] border-gray-400 group-hover:border-blue-800 border-solid  transform group-hover:-translate-y-3  duration-300 ease-out bg-white ">
                    <?php echo $row["title"]; ?>
                  </div>
                </div>
                
              </div>
            </div>
            </a>
          <?php
            break;
            case 8:
              ?>
                <a href="article.php?article= <?php echo $row["id"] ?> ">
                <div class="  flex flex-col   duration-200 group cursor-pointer border-gray-400 border-solid border-b border-r rounded-b-2xl rounded-l-none hover:border-blue-800
            news-card-effect after:ease-out ">
                  <div class="overflow-hidden">
                    <div class="flex flex-1  transform group-hover:scale-110 ease-out  duration-300">
                      <img src=' <?php echo $row["imgpath"]; ?> ' alt="">
                    </div>
                    <div class="transform uppercase px-3 pb-1 group-hover:-translate-y-3 pt-3  text-xs  font-bold text-blue-600 duration-300 ease-out bg-white ">
                      <?php echo typeToText($row["type"]); ?>
                    </div>
                    <div class="flex flex-1 border-solid  m-0 pb-8 ">
            
                      <div class="container h-24 px-[1.12rem] border-gray-400 group-hover:border-blue-800 border-solid  transform group-hover:-translate-y-3  duration-300 ease-out bg-white ">
                        <?php echo $row["title"]; ?>
                      </div>
                    </div>
                    
                  </div>
                </div>
                </a>
              <?php
                break;
                case 9:
                  ?>
                    <a href="article.php?article= <?php echo $row["id"] ?> ">
                    <div class="  flex flex-col   duration-200 group cursor-pointer border-gray-400 border-solid border-b border-r rounded-b-2xl rounded-l-none hover:border-blue-800
                news-card-effect after:ease-out ">
                      <div class="overflow-hidden">
                        <div class="flex flex-1  transform group-hover:scale-110 ease-out  duration-300">
                          <img src=' <?php echo $row["imgpath"]; ?> ' alt="">
                        </div>
                        <div class="transform uppercase px-3 pb-1 group-hover:-translate-y-3 pt-3  text-xs  font-bold text-blue-600 duration-300 ease-out bg-white ">
                          <?php echo typeToText($row["type"]); ?>
                        </div>
                        <div class="flex flex-1 border-solid  m-0 pb-8 ">
                
                          <div class="container h-24 px-[1.12rem] border-gray-400 group-hover:border-blue-800 border-solid  transform group-hover:-translate-y-3  duration-300 ease-out bg-white ">
                            <?php echo $row["title"]; ?>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    </a>
                  <?php
                    break;
                    case 10:
                      ?>
                        <a href="article.php?article= <?php echo $row["id"] ?> ">
                        <div class="  flex flex-col   duration-200 group cursor-pointer border-gray-400 border-solid border-b border-r rounded-b-2xl rounded-l-none hover:border-blue-800
                    news-card-effect after:ease-out ">
                          <div class="overflow-hidden">
                            <div class="flex flex-1  transform group-hover:scale-110 ease-out  duration-300">
                              <img src=' <?php echo $row["imgpath"]; ?> ' alt="">
                            </div>
                            <div class="transform uppercase px-3 pb-1 group-hover:-translate-y-3 pt-3  text-xs  font-bold text-blue-600 duration-300 ease-out bg-white ">
                              <?php echo typeToText($row["type"]); ?>
                            </div>
                            <div class="flex flex-1 border-solid  m-0 pb-8 ">
                    
                              <div class="container h-24 px-[1.12rem] border-gray-400 group-hover:border-blue-800 border-solid  transform group-hover:-translate-y-3  duration-300 ease-out bg-white ">
                                <?php echo $row["title"]; ?>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                        </a>
                      <?php
                        break;
                        case 11:
                          ?>
                            <a href="article.php?article= <?php echo $row["id"] ?> ">
                            <div class="  flex flex-col   duration-200 group cursor-pointer border-gray-400 border-solid border-b border-r rounded-b-2xl rounded-l-none hover:border-blue-800
                        news-card-effect after:ease-out ">
                              <div class="overflow-hidden">
                                <div class="flex flex-1  transform group-hover:scale-110 ease-out  duration-300">
                                  <img src=' <?php echo $row["imgpath"]; ?> ' alt="">
                                </div>
                                <div class="transform uppercase px-3 pb-1 group-hover:-translate-y-3 pt-3  text-xs  font-bold text-blue-600 duration-300 ease-out bg-white ">
                                  <?php echo typeToText($row["type"]); ?>
                                </div>
                                <div class="flex flex-1 border-solid  m-0 pb-8 ">
                        
                                  <div class="container h-24 px-[1.12rem] border-gray-400 group-hover:border-blue-800 border-solid  transform group-hover:-translate-y-3  duration-300 ease-out bg-white ">
                                    <?php echo $row["title"]; ?>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                            </a>
                          <?php
                            break;
                            case 12:
                              ?>
                                <a href="article.php?article= <?php echo $row["id"] ?> ">
                                <div class="  flex flex-col   duration-200 group cursor-pointer border-gray-400 border-solid border-b border-r rounded-b-2xl rounded-l-none hover:border-blue-800
                            news-card-effect after:ease-out ">
                                  <div class="overflow-hidden">
                                    <div class="flex flex-1  transform group-hover:scale-110 ease-out  duration-300">
                                      <img src=' <?php echo $row["imgpath"]; ?> ' alt="">
                                    </div>
                                    <div class="transform uppercase px-3 pb-1 group-hover:-translate-y-3 pt-3  text-xs  font-bold text-blue-600 duration-300 ease-out bg-white ">
                                      <?php echo typeToText($row["type"]); ?>
                                    </div>
                                    <div class="flex flex-1 border-solid  m-0 pb-8 ">
                            
                                      <div class="container h-24 px-[1.12rem] border-gray-400 group-hover:border-blue-800 border-solid  transform group-hover:-translate-y-3  duration-300 ease-out bg-white ">
                                        <?php echo $row["title"]; ?>
                                      </div>
                                    </div>
                                    
                                  </div>
                                </div>
                                </a>
                              <?php
                                break;
                                case 13:
                                  ?>
                                    <a href="article.php?article= <?php echo $row["id"] ?> ">
                                    <div class="  flex flex-col   duration-200 group cursor-pointer border-gray-400 border-solid border-b border-r rounded-b-2xl rounded-l-none hover:border-blue-800
                                news-card-effect after:ease-out ">
                                      <div class="overflow-hidden">
                                        <div class="flex flex-1  transform group-hover:scale-110 ease-out  duration-300">
                                          <img src=' <?php echo $row["imgpath"]; ?> ' alt="">
                                        </div>
                                        <div class="transform uppercase px-3 pb-1 group-hover:-translate-y-3 pt-3  text-xs  font-bold text-blue-600 duration-300 ease-out bg-white ">
                                          <?php echo typeToText($row["type"]); ?>
                                        </div>
                                        <div class="flex flex-1 border-solid  m-0 pb-8 ">
                                
                                          <div class="container h-24 px-[1.12rem] border-gray-400 group-hover:border-blue-800 border-solid  transform group-hover:-translate-y-3  duration-300 ease-out bg-white ">
                                            <?php echo $row["title"]; ?>
                                          </div>
                                        </div>
                                        
                                      </div>
                                    </div>
                                    </a>
                                  <?php
                                    break;
                case 14:
                
                 
                  ?>
                  <a href="article.php?article= <?php echo $row["id"] ?>" class=" container mt-6  flex flex-col duration-200 overflow-hidden group cursor-pointer border-l-4 rounded-l-2xl lg:rounded-l-none 
                      lg:border-l-0 border-r-4 border-t-4 border-b-4 rounded-r-2xl border-dotted  border-blue-600 col-span-2 lg:col-span-4 sm:col-span-2 sm:row-span-1 row-span-1 lg:row-span-2" >

                            <div class=" uppercase px-0  md:text-center lg:text-left font-bold pb-1  pt-4  text-xs text-blue-600 duration-300 ease-out bg-white ">
                              <?php echo typeToText($row["type"]); ?>
                            </div>

                        <div class="flex p-0 m-0 bg-white">

                          <div class=" md:text-center lg:text-left duration-300 ease-out font-bold bg-white text-4xl  ">
                            <?php echo $row["title"]; ?>
                          </div>

                        </div>
                        <div class="overflow-hidden  my-4">
                          <div class="flex flex-1 justify-center pb-1   duration-300 ease-out">
                            <div class="flex-1 mr-4">
                            <img src=' <?php echo $row["imgpath"]; ?> ' alt="">
                            </div>
                           
                            <div class="flex-1">
                              <article class="overflow-hidden text-ellipsis prose " style="display: -webkit-box; -webkit-line-clamp: 8; line-clamp: 8;  -webkit-box-orient: vertical;"> 
                              <?php echo $Parsedown->text($row["description"]) ; ?></article>
                         
                                </div>
                              </div>
                            </div>
  </a>
                  <?php
                    break;
}

?>