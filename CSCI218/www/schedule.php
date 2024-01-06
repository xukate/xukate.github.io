<!DOCTYPE html>
<html>

   <head>
   
      
      <title> class schdule</title>
    <link href="../../style/schedule.css" rel="stylesheet" type="text/css" />
    </head>
   <body>
	<h1> <?php 
		$name = "CSCI 218/L";
		echo  $name  ;
		?>  <sub>Fall  2023  Schedule</sub></h1>
	  
	<nav>
     <ul>
        <li><a href="csci218.php" >CourseInfo</a></li>
        <li><a href= >Schedule</a></li>
        <li><a href="links.php" >Links</a></li>
		<li><a href="homework.php">Assignments</a></li>
     </ul>
   </nav>
	
<table  border="1" cellspacing="3"  >
		<caption><font color = 'green' size = '3em'>Schedule  </font>
			 (This is tentative schedule, please check the update frequently)</a></caption>
<tbody>		

<tr>
	
	<th style="width:80px">Week</th>
	<th style="width:200px">Topic</th>
	<th style="width:80px">Reading</th>
	<th style="width:200px">Notes</th>
	<th style="width:200px">Reference</th>
	<th style="width:100px">Assignment</th>
</tr>

<tr>
	<th>1(08/23W)</th>
	<td>Course outline</td>
	<td ></td>
	<td>
		<a href="../00_Syllabus/CSCI218Syllabus2023Fall.pdf">Syllabus</a>
	</td>
	<td>
		
	</td>
	<td>
		<a href="../03_Assignments/AssignmentPolicy.pdf">AssignmentPolicy, </a>
		
	</td>
</tr>
<tr>
<th><font color="blue">Lab 1</font>  </th>
<td>Lab outline </td>
<td></td>
	<td><a href="../08_Labs/CSCI218LabSyllabus2023Fall.pdf">lab syllabus</a></td>
	<td ><a href="links.php#1">software&package, </a> </td>
	<td>
		<a href="../08_Labs/Lab 0.pdf" target = "Lab">lab1.pdf </a>
		
		
	</td>
</tr>

<tr>

	<th>1/(08/25F) </th>
	<td >intro to Computer Hardware and Software</td>
	<td >zb_W1</td>
	<td rowspan = "2"><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch01/C01_Intro.html">C01_Intro.html</a>
		</td>

	<td rowspan = "1"></td>
		
	<td >
		</td>
</tr>
<tr>
	<th>2/(08/28M) 
		</th>
	<td>Intro. to Arduino </td>
	
	
	<td>zb_W2</td>
	
	
		<td><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch02/greeting.c" target = "Lecture"></a>
       </td>
	<td>	
	
		
</tr>

<tr> 
	<th>2/(08/30W) <font color = 'red'>quiz1</font> </th>
	<td> C Basic, printf() </td>
	<td> zb1.5,1.6,1.10</td>
    <td><a href="../01_Notes/ch02/C02_CBasic.html">C02_Cbasic.html</a></td>

</tr>


<tr>
	<th>2/(9/1)</th>
	<td>  variable declare, assignment,update
	</td>
	<td> zb2.1 - 2.4</td>
	<td rowspan = "1"><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch02/C02_CBasic.html#3" target = "Lecture">C02_Cbasic.html</a> 
	</td>	<td > <a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch02/ex4InClass.c">ex4InClass.c</a>

	</td>
</tr>

<tr>
	<th>3/(9/4)</th>
	<td>  expression,operators, constant  
	</td>
	<td>zb2.4,2.5,2.9 </td>
	<td rowspan = "1"><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch02/C02_CBasic.html#expression" target = "Lecture">C02_CBasic.html</a> 
		</td>
	<td > <a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch02/ex5InClass.c">ex5InClass.c</a>
	</td>
</tr>
<tr>
	<th>3/(9/6)</th>
	<td> statement, scanf(), datatype </td>
	<td> zb2.20</td>
	<td rowspan = "1"><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch02/C02_CBasic.html#statement" target = "Lecture">C02_CBasic.html</a> 
		</td>
	<td > <a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch02/ex6InClass.c">ex6InClass.c</a>
	</td>

</tr>
<tr>
    <th><font color="blue">Lab2</font>  </th>
	<td>scanf(), printf(),<a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch02/C02_CBasic.html#4">write simple program</a>, errors and debug; setup(), loop() </td>
    <td colspan="1">zb_Lab2B</td><td colspan="1">
	<a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch02/zyBooks_C_Ch1.7.pdf">zyBooks_C_Ch1.7.pdf</a>
</td>
	
    
<td></td>
<td><a href="../08_Labs/Lab2/Lab2.pdf" target = "Lab">Lab2.pdf</a>
	, <a href="../08_Labs/Lab1/B2D.txt" target = "Lab"></a></td>
</tr>

<tr>
	<th>3/(9/8)<font color = 'red'>quiz2</font></th>
	<td> float, integer division and modulo, type conversion, 
	</td>
	<td>zb2.7,2.11,2.12 </td>
	<td rowspan = "1"><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch03/C03_Datatype.html">C03_Datatype.html</a> 
		</td><td></td>
	<td ><a href="homework.php">HW1</a></td>
</tr>




<tr><th>4(9/11,13) 
</th>
<td >numerical data  representation, unsigned binary & decimal, hexadecimal & octal,   char datatype, 
 </td>
<td>zb2.10,13, 2.17,18</td>
	<td  rowspan = "1"><a href="../01_Notes/ch03/C03_Datatype.html#2">C03_Datatype.html</a>
	 <a href="../01_Notes/ch03/dataRepresentation.pdf" target = "Lecture">dataRepresentation.pdf</a>
</td>
<td><a href="https://www.mathsisfun.com/binary-number-system.html">binary number system</a>,
		<a href="https://www.mathsisfun.com/binary-digits.html">possible number of n bits</a></td>
		<td></td>
</tr>
<tr >
	<th><font color="blue">Lab3</font></th>
	<td>decimal to binary number, vice-versa, breadboard, resistors, LED </td><td></td>
<td> <a href="../08_Labs/Lab3/Lab3.pdf">Lab3.pdf</a>  
 </td>
 <td><font color = 'red'>ConversionQuiz</font></td><td><a href="../08_Labs/Lab3/lab3.c" target = "Lab">lab3.c</a>,
 <a href="../08_Labs/Lab2/D2B.txt" >D2B.txt</a>, <a href="../08_Labs/Lab3/B2D.txt" target = "Lab">B2D.txt</a></td>
</tr>


<tr><th>4(9/15) </th>
<td>Character representation</td>
	<td> zb2.14</td>
	<td rowspan="1"> </td> <td></td>
	
</tr>


<tr>
    <th> 4(9/18) <font color = 'red'>quiz3</font>   </th>
	<td>sizeof(), output formatting placeholder</td>
    <td></td>
	<td><a href="../01_Notes/ch03/C03_Datatype.html#datatype">C03_Datatype.html</a></td>
	<td>zb9.2</td>
	
</tr>



<tr><th>5(9/20)  </th>
<td rowspan="1">Decision Making</td>
	<td>zb3.1-3.3</td>

	<td><a href="../01_Notes/ch04/C04.html">C04.html</a>  <a href="../01_Notes/ch04/temperature.c">temperature.c</a></td >
	<td><a href="../04_Tests/review.html"></a> </td>
	
</tr>
<tr>
    <th><font color="blue">Lab4</font>  </th>
	
	<td colspan="2"> serial communication: Serial.begin(), Serial.print() and
Serial.println() and Serial.write(); write sketch to do arithmatic, practice for and decision making
</td>
<td> <font color = 'green'>PifElseQuiz</font></td>
	<td><a href="../08_Labs/Lab4/mathIsFun.ino">mathIsFun.ino </a>, <a href="../02_TextBooks/beg-2ed-c-for-arduino-master/Listing_4_1_AlternateBlink/Listing_4_1_AlternateBlink.ino"></a>,
	</td>
	<td><a href="../08_Labs/Lab4/Lab4.pdf" target="Lab">lab4.pdf</a>, </td>
</tr>

<tr><th>5(9/22)<font color="red">quiz4</font> </th>
	<td colspan = "1">if elseif chain,  multiple if</td>
	<td>zb3.4, 3.7, 3.10</td>
	
	<td rowspan = "1"><a href="../01_Notes/ch04/C04.html">C04.html</a> </td>
	<td colspan="2">prepare Test1 <a href="../04_Tests/StudyGuide1.pdf">StudyGuide1.pdf</a> , 
	<a href="../04_Tests/review.html"></a> 
		</td>
</tr>
<tr><th>6(9/25M)</th>
<td colspan="3"> <font color = 'red'>Test1</font>
	</td><td></td>
	<td><a href="homework.php"></a></td>
</tr>

<tr>
	<th>6(9/27W)  </th>
	
	<td>  logical operators, C library</td>
	<td>zb 3.5, 3.6</td>
	<td><a href= "../01_Notes/ch04/C04.html#bo" target = "Lecture">C04.html</a></td>
	<td><a href="https://www.tutorialspoint.com/c_standard_library/math_h.htm">math.h</a></td>
	<td><a href="homework.php">HW2</a></td>
</tr>

<tr>
    <th><font color="blue">Lab5</font>  </th>
    <td colspan="2">  decision making, simple for loop</td>
	<td> <font color = 'green'>PifElseQuiz2</font></td>
	<td></td>
	<td><a href="../08_Labs/Lab5/Lab5.pdf" target="Labs">Lab5.pdf</a>, 
	<a href="../08_Labs/Lab5/lab5.c" target="Labs">lab5.c</a>
	<a href="../02_TextBooks/beg-2ed-c-for-arduino-master/Listing_4_2_AlternateBlink/Listing_4_2_AlternateBlink.ino"></a>
	</td> 
</tr>



<tr>
	<th>6(9/29F) </th>
	<td colspan="1">bool datatype, boolean algebra, examples and common errors, DeMorgan’s laws 
	</td>
	<td>zb3.8, 3.12, 3.18</td>
	<td><a href= "../01_Notes/ch04/C04.html#5.3" target = "Lecture">C04.html</a></td>
	<td></td>

</tr>

<tr> <th>7(10/2M)</th>
	<td>switch-case , array</td>
	<td>zb3.11</td>
	<td><a href= "../01_Notes/ch04/C04.html#demorgan" target = "Lecture">C04.html</a></td>
</tr>
<tr>
	<th>7(10/4) </th>
	<td rowspan="1">array </td>
	<td>zb5.1,5.2</td>
	
	<td rowspan="1"><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch05/C05.html" target = "Lecture">C05.html</a></td>
	<td></td>
</tr>
<tr>
    <th>7(10/4) <font color="blue">Lab6</font> </th>
    <td colspan="2"> decision making, De Morgan's Law</td>
	<td><a href="lms.cofc.edu">PBooleanQuiz</a></td> 
	<td colspan="2"><a href="../08_Labs/Lab6/Lab6.pdf">Lab6.pdf</a>, <a href="../08_Labs/Lab6/Lab6.docx">Lab6.docx</a>, 
		<a href="../08_Labs/Lab6/lab6.c">lab6.c</a</td>
		
</tr>


<tr>
	<th>7(10/6)<font color = 'red'>quiz5</font></th>
	
	<td>C strings</td>
	<td>zb5.10</td>
	
	<td rowspan=1><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch05/C05.html#2" target = "Lecture">C05.html</a></td>
</tr>
<tr>
	<th>8(10/9)</th>
	
	<td>string functions and character functions</td>
	<td>zb5.11,12</td>
	<td rowspan=1><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch05/C05.html#2.3" target = "Lecture">C05.html</a></td>
	<td><a href="https://www.tutorialspoint.com/arduino/arduino_character_functions.htm"></a></td>
</tr>

<tr>
	<th>8(10/11)</th>
	<td colspan="1"> C string and for loop </td>
	<td></td>
	<td>
	<a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch06/C06.html" target = "Lecture">C06.html</a></td>
	<td><a href="https://www.tutorialspoint.com/arduino/arduino_character_functions.htm"></a></td>
	<td></td>
</tr>

<tr>
    <th><font color="blue">Lab7</font>  </th>
	<td>parrayString quiz</td>
    <td colspan="2"> photoresistor, analogRead() </td>
	<td colspan="2">
	<a href="../08_Labs/Lab7/lab7.pdf">Lab7.pdf</a>, <a href="../08_Labs/Lab7/lab7.docx">Lab7.docx</a>,
	<a href="../08_Labs/Lab7/interfacingLightSensor.ino">interfacingLightSensor.ino</a>
	<a href="https://makeabilitylab.github.io/physcomp/sensors/photoresistors.html#what-value-should-we-make-our-fixed-resistor"></a></td>
</tr>

<tr>
<th>8(10/13) <font color = 'red'>quiz6</font></th>
	<td colspan="1"> Loop through array, break </td>
	<td>zb5.7</td>
	<td><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch06/C06.html#1.2" target = "Lecture">C06.html</a></td>
	<td><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch06/C06.html#1.2" target = "Lecture">Exercise</a></td>
</tr>

<tr>
	<th>9(10/16)</th>
	<td colspan="4"><center><font color = 'green'>Fall break</font></center></td>
</tr>

<tr>
	<th>9(10/18)  </th>
	<td rowspan=2>  accumulating pattern, sequence, series, product
	</td><td>zb1.8, 1.9</td>
	<td>
	<a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch06/C06.html#4" target = "Lecture">C06.html</a></td>
	<td></td>
	<td></td>
</tr>

<tr>
<th><font color="blue">Lab8</font>  </th>
<td colspan = "2"></td>
<td> <a href="../08_Labs/Lab8/Lab8.pdf">Lab8.pdf</a>, <a href="../08_Labs/Lab8/lab8.c">lab8.c</a>
</td> 
</tr>

<tr>
	<th>9(10/20)<font color = 'red'>quiz7</font></th>
	<td > continue, 2D array,  nested for loop
	</td>zb5.9</td><td></td>
	<td><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch06/C06.html#2" target = "Lecture">C06.html</a></td>
	<td><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch06/ex.c" target = "Lecture">ex.c</a></td>
	<td><a href="homework.php">HW3 </a></td>
</tr>

<tr>
<th>10(10/23) </th>
	<td > array and string </td>
	<td>zb5.13</td>
	<td rowspan="1"><a href="../01_Notes/ch06/C06.html#3" target = "Lecture">C06.html</a></td>
</tr>



<tr>
<th>10(10/25) </th>
<td >function</td>
<td>zb6.1, 6.3</td>
<td><a href="../01_Notes/ch07/C07.html" >C07.html</a></td>
</tr>

<tr>
<th>10(10/25) <font color="blue">Lab9</font> </th>
<td ></td><td><font color = 'green'>Pfor, ParrayFor</font></td><td></td>
<td><a href="../08_Labs/Lab9/Lab9.pdf">Lab9.pdf</a>, <a href="../08_Labs/Lab9/lab9.c">lab9.c</a></td>
</tr>
<tr>
<th>10(10/27)<font color = 'red'>quiz8</font> </th>
<td rowspan="1">return, parameters</td>
<td>zb6.4, 6.8</td>
<td><a href="../01_Notes/ch07/C07.html#3" >C07.html</a></td>
<td><a href="../01_Notes/ch07/example1.c" >example1.c</a></td>
</tr>

<tr>
<th>11(10/30)</th>
<td >positional parameters,documentation, nested call </td><td></td>
<td rowspan="1"><a href="../01_Notes/ch07/C07.html#5">C07.html</a></td>

<td><a href="../04_Tests/review.html#for">forLoopExercise</a></td>
</tr>

<tr><th>11(11/1)</th>
<td>Scope of variables</td> <td>zb6.14</td>
<td rowspan="1"><a href="../01_Notes/ch07/C07.html#7">C07.html</a></td>
</tr>
<tr><th>11(11/1)  <font color="blue">Lab10</font></th>
<td>zb6.7</td> <td></td> <td><a href="../08_Labs/Lab10/Lab10.pdf" target = "Lab">Lab10.pdf</a>, 
<a href="../08_Labs/Lab10/lab10.c" >lab10.c</a>,<a href="../08_Labs/Lab10/pushButton.ino">pushButton.ino</a>,
	 <a href="../08_Labs/Lab10/halfAdder.ino">halfAdder.ino</a>,
	 
	   <a href="../08_Labs/Lab10/RGB_LED.ino">RGB_LED.ino</a> </td>
</tr>
<tr>
	<th>11(11/3)</th>
	<td>Scope of parameters</td><td>zb6.11, 6.13</td>
	<td rowspan="1"><a href="../01_Notes/ch07/C07.html#7.3">C07.html</a></td>
	<td></td>
<td><a href="homework.php">HW4</a></td>
</tr>
<tr>
<th>12(11/6) <font color = 'red'>Test2</font></th>
<td colspan="4"><center><a href="../04_Tests/StudyGuide2.pdf">StudyGuide2.pdf</a>, <a href="../04_Tests/reviewKey.html">review_Key</a>
</center></td>

</tr>


<tr>
	<th>12(11/8)</th>
	<td>function passing array</td>
	<td>zb6.11</td>
	<td rowspan="2"><a href="../01_Notes/ch07/C07#fpointer.html"></a></td>
	<td></td>
<tr>
<tr>
	<th><font color = 'blue'>Lab11</font></th>
	<td></td>
	<td><a href="../08_Labs/Lab11/Lab11.pdf" target = "Lab">Lab11.pdf</a>
	<a href="../08_Labs/Lab11/lab11.c" target = "Lab">lab11.c</a></td>
	<td colspan="2"><center><a href="../08_Labs/Project/CSCI218LFinalProject.pdf">CSCI218LFinalProject.pdf</a></center>
</td>
	
<tr>

<th>12(11/10)</th>
<td>while loop，sentinel loop, common error/infinite loop</td>
<td>zb4.2</td>
<td ><a href="../01_Notes/ch08/C08.html">C08.html</a></td>
<td></td>
</tr>

<tr>
<th>13(11/13)</th>
<td >do while loop, loop and a half pattern, randomNumber generator </td>
<td rowspan="2">zb2.19</td>
<td rowspan="2"><a href="../01_Notes/ch08/C08.html#3">C08.html</a>, <a href="../01_Notes/ch08/whileExample.c">whileExample.c</a></td>
<td><a href="../01_Notes/ch08/C08.html#goodInput"></a>
<a href="../04_Tests/review.html#while">while</a>, <a href="https://xuk.people.cofc.edu/CSCI218/04_Tests/review.html#func">findBiggish</a></td>

</tr>
<tr>
<th>13(11/15)</th>
<td>while exercise</td>
<td><a href="http://xuk.people.cofc.edu/CSCI218/04_Tests/review.html#while">reviewQuestion </a>, 
<a href="http://xuk.people.cofc.edu/CSCI218/04_Tests/reviewKey.html#while">[Key]]</a></td>
</tr>
<tr>
	<th><font color = 'blue'>Lab12</font></th>


<td><a href="../08_Labs/Lab12/Lab12.pdf">Lab12.pdf</a>, <a href="../08_Labs/Lab12/lab12_key.c"> </a></td>
</tr>



<tr>
	<th>13(11/17)  <font color = 'red'>quiz9</font></th>
	<td rowspan = "2">algorithm design, linear search vs binary search, time complexity</td>
	<td rowspan = "2">zb11.1-11.4</td>
	<td rowspan = "2"><a href="../01_Notes/ch09/C09.html">C09.html</a></td>
	<td></td><td><a href="homework.php">HW5</a></td>
</tr>
<tr>
	<th>14(11/20)</th>
	<td><a href="../04_Tests/AlgorithmPractice.pdf">AlgorithmPractice.pdf</a>, 
	<a href="../04_Tests/AlgorithmPractice_sol.pdf">[Key]</a></td>
</tr>
<tr>
	<th>14(11/22-26)</th>
	<td colspan = "5">
	<font color="green">Thanksgiving Holiday, no lab</font></td>
</tr>

<tr>
	<th>15(11/27,29)</th>
	<td colspan = "1">Introduction to pointer</td>
	<td>zb8.1-2</td>
	<td><a href="../01_Notes/ch10/C10.html">C10.html</a></td>
	<td colspan="1"><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch10/C10.html" target = "Lecture"></a>
	<a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch10/ptEx1.c" target = "Lecture">ptEx1.c</a>, 
	<a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch10/pt_inclass.c" target = "Lecture">pt_inclass.c</a>, 
	<a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch10/findBiggishTotal.c"> findBiggishTotal.c</a></td>

	<td colspan="1"><a href="homework.php">Optional HW</a></td>
	
</tr>
<tr>
    <th><font color="blue">15(11/29) Lab</font>  </th>
    <td colspan="5">final project presentation</td>
</tr>
<tr>
	<th>15(12/1)</th>

	<td colspan="2"><a href="https://xuk.people.cofc.edu/CSCI218/01_Notes/ch10/C10.html" target = "Lecture"></a></td>

	<td>pointerSearch in OAKS
	</td>
	
</tr>


<tr>
	<th>16(12/4)  <font color = 'red'>quiz10</font></th>
	<td colspan = "5"><a href="../04_Tests/StudyGuideFinal.pdf">Final studyguide </a>, 
	reviewQuestion<a href="http://xuk.people.cofc.edu/CSCI218/04_Tests/reviewKey.html">[Key]  </td>
</tr>

<tr>
	<th rowspan="1">16(12/8)</th>
	<td colspan="5"><center><font color='red'>Final Exam</font > 8:00 am - 10:00 am 
        </td>
</tr>



</tbody>

</table>



<section>
	  <h2> Important dates</h2>
	  <ul>
        <li>Wednesday, Aug. 23: Class begins</li>
        <li>Monday, Aug. 28: Last day to drop the class</li>
		<li>Saturday, Sept. 23, Sunday, Sept. 24: Storm Makeup day</li>
		<li>Friday, Oct. 13: Midterm grades due </li>
		<li>Monday Oct. 16, Tuesday Oct. 17: Fall break, no class</li>
		<li>Friday, Oct. 27:  Last day to drop with grade of “W”</li>
		<li>Saturday, Nov. 11, Sunday, Nov. 12: Storm Makeup day</li>
		<li>Wednesday, Nov. 22 – Sunday, Nov. 26, Thanksgiving Holiday </li>
		<li>
		Monday, Dec. 4:  Last day of classes</li>
		
		<li>Final exam: 
			<ul>
			<li> Friday, Dec. 8:  8:00am - 10:00am</li>
			</ul>
		</li>

	  </ul>
	  </section>

      <footer>	 
         <address>
            <a href="http://compsci.cofc.edu/">Dept. of Computer Science</a>, 
		&nbsp;&#9728;&nbsp;	<a href="http://cofc.edu/">College of Charleston</a>
				&nbsp;&#9728;&nbsp;
		<a href="http://xuk.people.cofc.edu/">Xu's Teaching</a>
         </address>
      </footer>

   </body>

</html>