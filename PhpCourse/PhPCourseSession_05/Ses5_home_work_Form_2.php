<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<div id=\"heading\" style=\"width:600px;height:100px;;background-color:blue;text-align:center;\"><br>";
echo "<h2 style=\"color:black\">Assignment of PHP course #8 Session number-5  30/07/14</h2>";
echo "<hr>";
echo "<p></p></div>";

//===============================================================================================================

//Multiplication Table HTML Code 

echo "<h3>Multiplication Table HTML Code .</h3>";




$table= "<table>
<tr>
<td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td>
</tr>
<tr>
<td>2</td><td>4</td><td>6</td><td>8</td><td>10</td><td>12</td><td>14</td><td>16</td><td>18</td><td>20</td>
</tr>
<tr>
<td>3</td><td>6</td><td>9</td><td>12</td><td>15</td><td>18</td><td>21</td><td>24</td><td>27</td><td>30</td>
</tr>
<tr>
<td>4</td><td>8</td><td>12</td><td>16</td><td>20</td><td>24</td><td>28</td><td>32</td><td>36</td><td>40</td>
</tr>
<tr>
<td>5</td><td>10</td><td>15</td><td>20</td><td>25</td><td>30</td><td>35</td><td>40</td><td>45</td><td>50</td>
</tr>
<tr>
<td>6</td><td>12</td><td>18</td><td>24</td><td>30</td><td>36</td><td>42</td><td>48</td><td>54</td><td>60</td>
</tr>
<tr>
<td>7</td><td>14</td><td>21</td><td>28</td><td>35</td><td>42</td><td>49</td><td>56</td><td>63</td><td>70</td>
</tr>
<tr>
<td>8</td><td>16</td><td>24</td><td>32</td><td>40</td><td>48</td><td>56</td><td>64</td><td>72</td><td>80</td>
</tr>
<tr>
<td>9</td><td>18</td><td>27</td><td>36</td><td>45</td><td>54</td><td>63</td><td>72</td><td>81</td><td>90</td>
</tr>
<tr>
<td>10</td><td>20</td><td>30</td><td>40</td><td>50</td><td>60</td><td>70</td><td>80</td><td>90</td><td>100</td>
</tr>
</table>";

echo htmlentities($table,ENT_IGNORE, "UTF-8");