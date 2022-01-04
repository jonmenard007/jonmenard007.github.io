<?php
    include "header.php";
?>

<body>
    <div id = "content" >
        <div id = "top">
            <h1 class="header">About Me </h1>
            <img id = "profilePicture" src="Images/profile.jpg">
            <br> a
        </div>
        <div id= "aboutMeHolder">
            <br>
            <h1 class="header2"> Jon Menard</h1>
            <h2 class="header2">Software Engineering Graduate Student - Carleton University</h2>
            <div id = "aboutMe" >
                I am a graduate Software Engineering student at Carleton University. My interest in software engineering started in 2016 when I took my first computer science class in Grade 11. The teacher gathered the class around his chalkboard and explained to us that we would be creating our very own webpage. 
                He showed us a few lines of code and told us to try it ourselves. I wonder how was &lthtml&gt or &ltp&gt going to create a webpage. To my surprise, within a few minutes, my bright white screen displayed the words “Hello World!” in small black text. I was amazed there was a whole new language to discover; a language that came naturally to me and was exciting to learn. I immediately knew that software engineering was a place where I could thrive.  I have 
                since had experience writing in: 
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>PHP</li>
                    <li>JavaScript</li>
                    <li>Java</li>
                    <li>C#</li>
                    <li>Python</li>
                    <li>MySQL</li>
                    <li>UNIX command line</li>
            
                </ul>
                I have also gained experience working in groups using Github to host my projects. 
                At the moment I am extermly intrested in machine learning. For the past 5 months I have been working on devloping a neural network which will allows a car to park itself. 
                This project is still a work in progress, however I hope to finish it soon.

                I have also built my own computer and I am particularly strong in Java and Javascript. 
                <br><br>
                My passion for Software Engineering is fueled by trying to solve complex problems that seem impossible. I thoroughly enjoy coding the logic behind the function of the program. I have created this portfolio all on my own, coding everything from scratch in my free time. 
                Shown in the projects section are four short projects; MineSweeper and Snakes, Flappy Bird and my first attempt at artificial intelligence using the genetic algorithm, which I have created to help illustrate my excitement for Software Engineering.
                <br>
                <br>
                I am currenlty working in a database development team for the Goverment at Statistics Canada.
                Outside of school I am a pretty big gym rat and love spending time outdoors.
                <br>
                <br>

                Last updated April 28, 2021
            </div>
        </div>
    </div>
</body>


<script>
    $(function(){
        $("#about").css({
            color: 'black',
            textDecoration: 'underline'
        });
    });
</script>

</html>