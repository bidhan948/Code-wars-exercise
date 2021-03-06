<p style="
text-align: center; 
font-family: Arial, Helvetica, sans-serif; 
font-size: large;
margin-top: 25px;">

    A child is playing with a ball on the nth floor of a tall building. The height of this floor, h, is known.

    He drops the ball out of the window. The ball bounces (for example), to two-thirds of its height (a bounce of 0.66).

    His mother looks out of a window 1.5 meters from the ground.

    How many times will the mother see the ball pass in front of her window (including when it's falling and bouncing ?
</p>
<p style="
text-align: center; 
font-family: Arial, Helvetica, sans-serif; 
font-weight: bolder;
word-spacing: 3px;">
    Three conditions must be met for a valid experiment:
</p>
<ul style="
text-align: center; 
font-family: Arial, Helvetica, sans-serif; 
font-size: large;
list-style: none;">
    <li style="padding-top: 7px;">1. Float parameter "h" in meters must be greater than 0</li>
    <li style="padding-top: 7px;">2. Float parameter "bounce" must be greater than 0 and less than 1</li>
    <li style="padding-top: 7px;">3. Float parameter "window" must be less than h</li>
</ul>
<p style="
text-align: center; 
font-family: Arial, Helvetica, sans-serif; 
font-weight: bold;
word-spacing: 3px;
margin-top: 30px;">
    If all three conditions above are fulfilled, return a positive integer, otherwise return -1.
</p>
<p style="
text-align: center; 
font-family: Arial, Helvetica, sans-serif; 
font-weight: bold;
word-spacing: 3px;
margin-top: 30px;">
    Note:
</p>

<p style="
text-align: center; 
font-family: Arial, Helvetica, sans-serif; 
font-size: large;
list-style: none;">
    The ball can only be seen if the height of the rebounding ball is strictly greater than the window parameter.
</p>
<p style="
text-align: center; 
font-family: Arial, Helvetica, sans-serif; 
font-weight: bold;
word-spacing: 3px;
margin-top: 30px;">
    Examples:
</p>

<div style="
display: flex;
justify-content: center;
margin-top: 40px;
">
    <div style="
box-shadow: 4px 5px 15px wheat;
padding: 15px;
">
<p style="
text-align: center; 
font-family: Arial, Helvetica, sans-serif;
word-spacing: 3px;">
            <span style="line-height: 2rem;"> - h = 3, bounce = 0.66, window = 1.5, result is 3</span><br>

            <span style="line-height: 2rem;">- h = 3, bounce = 1, window = 1.5, result is -1 </span><br>

            <span style="line-height: 2rem;">(Condition 2) not fulfilled).</span> <br>
        </p>
    </div>
</div>