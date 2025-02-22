<?php
  include('../Quiz3/includes/conn.php');
  include('../Quiz3/includes/headernav.php');
?>
<!-- <!DOCTYPE html>
<html lang="en">
  <head>
   <title>Resume</title>
   <meta charset="UTF-8">
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script> ></script>
   <script type="text/javascript" src="../Resources/lab8jQuery.js"></script> 
   <script type='text/javascript' src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
   <script type="text/javascript" src="../Quiz3/resources/mysite.js"></script>
   <link rel="stylesheet" href="../Resources/site.css">
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">>
    <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');
    *{
         box-sizing: border-box;
      }

     html {
         width: 100%;
      }

      .pageHeader {
         font-family:'Times New Roman';
         text-decoration-thickness: 3px;
         padding: 15px;
         text-align:center;
         background-color:lightgray;
         color: black;
      }

      .contactInfo {
         display:flex;
         border-top: 2px solid black;
         border-bottom: 2px solid black;
         background-color: darkgrey;
         justify-content:center;

      }

      .contactInfo .links {
         padding: 14px 20px;
         text-decoration-thickness: 1px;
         font-family:'Times New Roman'
      }

      .contactInfo .nLinks {
         display: flex;
         justify-content: center;
         flex-wrap: nowrap;
         font-family: 'Times New Roman';
         padding:14px 7px;
      }

      .contactInfo a:hover{
         color: darkblue;
         font-style:italic
      }

      .row {
         display: flex;
         flex-wrap:wrap;
         margin: 0;
      }

      /* creates an uneven split between the side bar and the main body */
      .side {
         flex: 30%;
         background-color: rgb(230, 226, 226);
         padding:20px;     
      }

      /* creates an uneven split between the side bar and the main body */
      .main{
         flex:70%;
         background-color:white;
         padding:20px;
      }

      #resumePhoto img {
         width: 95%;
         height:auto;
         border: 1px black;
         border-radius: 24px;
         padding:4px;
         margin-top:3%;
         box-shadow: 0 4px 8px 0 black;
      }
      
      h3{
         font-family:'Times New Roman';
         text-decoration-line: underline;
         margin-top:20px;
         font-size:large
       }

      ul{
         list-style-type: disc;
         margin-left:20px;
       }
      
      p{
         font-family: 'Times New Roman';
      }

      /* creates a div with a border line at the bottom as a design 
      seperator block between different sections of resume */
      .line{
         border-bottom: 1px solid black;
      }
      /* move the dates on the side bar all the way to the right */
      .side .sBar{
         margin: 0 0 0 50px;
      }
      /* fix the formatting for the date for CS1 */
      .side #CS1{
       margin: 0 0 0 100px;  
      }

      /* move the dates in the right-body all the way to the right */
      .main .mBar{
         margin: 0 0 0 730px;
      }

      /* fix the formatting for the dates for Playa Bowls */
      .main #PB{
         margin: 0 0 0 630px;
      }

      /* fix the formatting for the dates for East Brunswick High School*/
      .main #EBHS{
         margin: 0 0 0 760px;
      }
   
    </style>
  </head>
  <body>
   <div class="header">
      <a href ="../aboutMe/aboutMe.html"><img src="../Resources/logo.png" alt="Arielle Revis Logo"></a>
      <div class="headerContents">
        <h1><strong>Arielle Revis Portfolio</strong></h1>
        <h2><em>The one-stop shop to all things 'Arielle'</em></h2>
      </div>
   </div>
      <div class="navbar">
        <div class="navLinks"><a href="../aboutMe/aboutMe.html">About Me</a></div>
        <div class="navLinks"><a href="../Resume/rsmeLanding.html ">Resume</a></div>
        <div class="prjtLabs">
          <button class="prjtLabsBtn">Projects & Labs</button>
          <div class="prjtLabsContent">
          </div>
        </div>
        <div class="navLinks"><a href="../groupDirectory/grpdir.html">Group Directory</a></div>
        <div class="navLinks"><a href="../contactInfo/cntct.html">Contact Info</a></div>
      </div> -->
      <style>
    
         @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');
         *{
              box-sizing: border-box;
           }
     
          html {
              width: 100%;
           }
     
           .pageHeader {
              font-family:'Times New Roman';
              text-decoration-thickness: 3px;
              padding: 15px;
              text-align:center;
              background-color:lightgray;
              color: black;
           }
     
           .contactInfo {
              display:flex;
              border-top: 2px solid black;
              border-bottom: 2px solid black;
              background-color: darkgrey;
              justify-content:center;
     
           }
     
           .contactInfo .links {
              padding: 14px 20px;
              text-decoration-thickness: 1px;
              font-family:'Times New Roman'
           }
     
           .contactInfo .nLinks {
              display: flex;
              justify-content: center;
              flex-wrap: nowrap;
              font-family: 'Times New Roman';
              padding:14px 7px;
           }
     
           .contactInfo a:hover{
              color: darkblue;
              font-style:italic
           }
     
           .row {
              display: flex;
              flex-wrap:wrap;
              margin: 0;
           }
     
           /* creates an uneven split between the side bar and the main body */
           .side {
              flex: 30%;
              background-color: rgb(230, 226, 226);
              padding:20px;     
           }
     
           /* creates an uneven split between the side bar and the main body */
           .main{
              flex:70%;
              background-color:white;
              padding:20px;
           }
     
           #resumePhoto img {
              width: 95%;
              height:auto;
              border: 1px black;
              border-radius: 24px;
              padding:4px;
              margin-top:3%;
              box-shadow: 0 4px 8px 0 black;
           }
           
           h3{
              font-family:'Times New Roman';
              text-decoration-line: underline;
              margin-top:20px;
              font-size:large
            }
     
           ul{
              list-style-type: disc;
              margin-left:20px;
            }
           
           p{
              font-family: 'Times New Roman';
           }
     
           /* creates a div with a border line at the bottom as a design 
           seperator block between different sections of resume */
           .line{
              border-bottom: 1px solid black;
           }
           /* move the dates on the side bar all the way to the right */
           .side .sBar{
              margin: 0 0 0 50px;
           }
           /* fix the formatting for the date for CS1 */
           .side #CS1{
            margin: 0 0 0 100px;  
           }
     
           /* move the dates in the right-body all the way to the right */
           .main .mBar{
              margin: 0 0 0 730px;
           }
     
           /* fix the formatting for the dates for Playa Bowls */
           .main #PB{
              margin: 0 0 0 630px;
           }
     
           /* fix the formatting for the dates for East Brunswick High School*/
           .main #EBHS{
              margin: 0 0 0 760px;
           }
        
         </style>
      <div class="sidenav">
        <a href="./rsmeLanding.html" id="onlineResume">Online Resume</a>
        <a href="../Resources/ArielleRevisResume2024.pdf" id="resumePDF" download>Document Resume</a>
        <a href="https://events.isc2.org/p/s/benefits-and-limitations-of-generative-ai-for-cybersecurity-awareness-training-6474" id="research">Research</a>
        <a href="https://www.instagram.com/rpidanceteam/" id="danceTeam">RPI Dance Team</a>
        <a href="https://www.alliedperformingarts.com/" id="allied">Allied PAC</a>>
      </div>
  
      <div class="pageHeader">
          <h1>Arielle Revis</h1>
          <h2>
             <strong><em>Curious, Collaborative, Committed</em></strong>
          </h2>
       </div>
       <div class="contactInfo">
          <div class="links"><a href="mailto:arielle.a.revis@gmail.com">arielle.a.revis@gmail.com</a></div>
          <div class= "nLinks">|   Troy, New York  |</div>
          <div class="nLinks">(848) - 237 9843   |</div>
          <div class="links"><a href="https://www.linkedin.com/in/arielle-revis/">Linkedin.com/ariellerevis</a></div>
       </div>
    
       <div class="row"><!-- div for under the page header and contact info -->
          
          <!-- div for the left-hand side bar -->
        <div class="side"> 
          <div id="resumePhoto">
            <img src="../Resources/linkedinphoto.jpg" alt="Personal Resume Professional Photo of Arielle">
          </div>
            <h3>RELEVANT COURSEWORK</h3>
            <p><strong>Intro to IT & Web Science</strong><em class="sBar">Fall 2024 - Present</em></p>
            <p>Actively developing skills in DevOps, Computer Networking, GitHub, Repositories, Databases, Cybersecurity, E-commerce and Design, Quantum, and Generative AI</p>
            <p><strong>Computer Science I</strong><em id="CS1">Fall 2024 - Present</em></p>
            <p>Ongoing refinement of computational thinking, problem-solving, small-scale programming, and applications including web-centric computing, image processing, numerical computing, and graphics.<p>
            <p><strong>AP Computer Science Principles</strong><em class="sBar">Spring 2024</em></p>
            <p>Mastery of design and application of computer science concepts to solve problems through the development of algorithms and programs. Explored abstraction and computing innovations and systems, their potential impacts, and ethical computing culture.<p>      
        </div> 
    
             <!-- div for the right-hand main body -->
        <div class="main">
          <h3>OBJECTIVE</h3>
          <p>Current student at Rensselaer Polytechnic Institute seeking a full-time, summer 2025 internship in the field of Information Technology.</p>
          <div class="line"></div>
          <h3>EDUCATION</h3>
          <p><strong>Rensselaer Polytechnic Institute</strong> (RPI), Troy, NY<br>Bachelor of Science, Information Technology & Web Science<br>Focus Track: Information Security<em class="mBar">May 2024 - Present</em></p> 
          <p><strong>East Brunswick High School</strong>, East Brunswick, NJ<br>High Honors Diploma<br>GPA 4.35/4.0<em id="EBHS">Jun. 2024</em></p>
          <div class="line"></div>
          <h3>EXPERIENCE</h3>
          <p><strong>Generative AI and Cybersecurity Research Assistant</strong><em class="mBar">Aug. 2024 - Present</em></p>
          <ul>
              <li>Accurately gathered and organized 90+ data points on human subjects on their knowledge of Cybersecurity before and after an administered training.</li>
              <li>Analyzed large datasets to identify patterns and vulnerabilities in RPI student, faculty, and staff’s knowledge of Cybersecurity concepts.</li>
              <li>Collaborated with a multidisciplinary team to test and evaluate the performance of AI models and the RPI community’s knowledge of such.</li>
              <li>Co-Authored research papers and technical reports on the research findings and advancements.</li>
          </ul>
          <p><strong>Playa Bowls Employee</strong><em id="PB">Jun. 2022 - Aug. 2024</em></p>
          <ul>
            <li>Collaborated and communicated with team members to ensure efficient workflow and positive work atmosphere.</li>
          </ul>
          <div class="line"></div>
            <h3>LEADERSHIP</h3>
            <ul>
              <li>Co-President of Family Career and Community Leaders of America</li>
              <li>Vice President of Mu Alpha Theta</li>
              <li>VP Communications Science Honors Society</li>
              <li>VP Jewish Club</li>
              <li>High School Dance Team Captain</li>
            </ul>
            <div class="line"></div>
            <h3>HONORS</h3>
            <ul>
              <li>AP Scholar with Honor Award</li>
              <li>Certificate of Excellence in Computer Science</li>
              <li>High School Graduation with Highest Honors, National Honor Society, 4.0+ GPA, Presidential Award for Academic Excellence</li>
            </ul>
          </div>
        </div>
      <footer>
      <h1><strong>Thank You For Visiting!</strong></h1>
      <div class="footerLinks">
        <a href="mailto:arielle.a.revis@gmail.com">arielle.a.revis@gmail.com</a>
        <a href="tel:8482379843">(848) - 237 9843</a>
        <a href="https://www.linkedin.com/in/arielle-revis/">linkedin.com/ariellerevis</a>
      </div>
    </footer>
  </body>
</html>