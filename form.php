<form method="post" action="email.php" id="calculation">
    <fieldset>
        <div class="form">
            <table class="top_text">
                <td>
                <div> <?php echo $configs['Top_Text'];?><a href="mailto:brent.kronmiller@cgrb.oregonstate.edu" target="_blank">Brent Kron    miller</a>
                </div>
                </td>
            </table>
            <table class="NA">
                <div class="blank">
                    <td>
                    <h4>If a field does not apply to your application please leave it blank or N/A</h4>
                    </td>
                </div>
            </table>

            <table class="text_input">
                <tbody>

                <tr>
                    <div class="form-floating mb-3">
                    <td>    <input type="text" class="form-control" id="first-name" name="first-name" placeholder="First Name"></td>
                        <label for="first-name"></label>
                    </div>
                </tr>

                <tr>

                    <div class="form-floating mb-3">
                    <td>    <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last Name"> </td>
                        <label for="last-name"></label>
                    </div>
                </tr>

                <tr>

                    <div class="form-floating mb-3">
                       <td> <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"> </td>
                       <label for="email"></label>
                    </div>
                </tr>

                <tr><!-- create drop down menu with all college names-->
                    <!--<div class="form-item webform-component webform-component-textfield" id="webform-component-last-name">
                        <td> <label for="college_name">Name of the College you belong to:<span class="form-required" title="This field is required.">*</span></label> </td>
                        <td> <input type="text" id="college_name" name="college_name" value="" size="60" maxlength="128" class="form-text required"> </td>
                    </div>-->
                    <div class="college">
                        <p> <td>Which department are you a member of:
                         <select name="college_name">
                        <option value="AgChem">AgChem</option>
                        <option value="Animal_Sciences">Animal_Sciences</option>
                        <option value="Biochemistry_Biophysics">Biochemistry Biophysics</option>
                        <option value="Biological_and_Ecological_Engineering">Biological and Ecological Engineering</option>
                        <option value="Biology">Biology</option>
                        <option value="Biomedical_Sciences">Biomedical Sciences</option>
                        <option value="Botany_PlantPath">Botany and Plant Pathology</option>
                        <option value="CBEE">CBEE</option>
                        <option value="CGRB">CGRB</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Crop_and_Soil_Science">Crop and Soil Science</option>
                        <option value="EHSC">EHSC</option>
                        <option value="EMT">EMT</option>
                        <option value="Fish_and_Wildlife">Fish and Wildlife</option>
                        <option value="Food_Science">Food_Science</option>
                        <option value="Forestry">Forestry</option>
                        <option value="Forest_Science">Forest Science</option>
                        <option value="Horticulture">Horticulture</option>
                        <option value="INR">Institute for Natural Resources</option>
                        <option value="Integrative_Biology">Integrative Biology</option>
                        <option value="Linus_Pauling_Institute">Linus Pauling Institute</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="MCB">MCB</option>
                        <option value="Microbiology">Microbiology</option>
                        <option value="Nutrition_and_Exercise_Sciences">Nutrition and Exercise Sciences</option>
                        <option value="Oceanography">COEAS</option>
                        <option value="Pharmacy">Pharmacy</option>
                        <option value="Public_Health">Public_Health</option>
                        <option value="Statistics">Statistics</option>
                        <option value="Training">Training</option>
                        <option value="iFiles">iFiles</option>
                        </select> </td> </p>
                    </div>
                </tr>

                <tr>
                    <div class="form-floating mb-3">
                       <td> <input type="test" class="form-control" id="other" name="other" placeholder="If your department is not listed above please enter it here"> </td>
                       <label for="other"></label>
                    </div>
                </tr>

                <tr>
                    <div class="form-floating mb-3">
                       <td> <input type="test" class="form-control" id="class_name" name="class_name" placeholder="Class Name (example: Intro to Command Line BASH)"> </td>
                       <label for="class_name"></label>
                    </div>
                </tr>
                
                <tr>
                    <div class="form-floating mb-3">
                       <td> <input type="test" class="form-control" id="ta_name1" name="ta_name1" placeholder="Teaching Assistant Name (Fist and last names of any teaching assistants or instructors)"> </td>
                       <label for="TAs"></label>
                    </div>

                </tr>

                <tr>

                    <div class="form-floating mb-3">
                       <td> <input type="email" class="form-control" id="ta_email_1" name="ta_email_1" placeholder="name@example.com"> </td>
                       <label for="email"></label>
                    </div>
                </tr>

                <tr>
                    <div class="form-floating mb-3">
                       <td> <input type="test" class="form-control" id="ta_name2" name="ta_name2" placeholder="Teaching Assistant Name (Fist and last names of any teaching assistants or instructors)"> </td>
                       <label for="TAs"></label>
                    </div>

                </tr>

                <tr>

                    <div class="form-floating mb-3">
                       <td> <input type="email" class="form-control" id="ta_email_2" name="ta_email_2" placeholder="name@example.com"> </td>
                       <label for="email"></label>
                    </div>
                </tr>

                <tr>
                    <div class="form-floating mb-3">
                       <td> <input type="test" class="form-control" id="ta_name3" name="ta_name3" placeholder="Teaching Assistant Name (Fist and last name of teaching assistant or instructors)"> </td>
                       <label for="TAs"></label>
                    </div>

                </tr>

                <tr>

                    <div class="form-floating mb-3">
                       <td> <input type="email" class="form-control" id="ta_email_3" name="ta_email_3" placeholder="name@example.com"> </td>
                       <label for="email"></label>
                    </div>
                </tr>

                <tr>
                    <div class=
                </tr>
                <tr>
                    <div class="form-floating mb-3">
                       <td> <input type="test" class="form-control" id="software_need" name="software_need" placeholder="Please list the Software you need the CGRB to install for you"> </td>
                       <label for="software_need"></label>
                    </div>
                </tr>

                <tr>
                    <div class="softman">
                        <p>
                        <td> Do you need CGRB software management?
                        <input type="checkbox" id="soft" name="soft" value="<?php echo $configs['Software_Management'];?>" onchange="calculatetotal()"> </td>
                        </p>
                    </div>
                </tr>

                <tr>
                    <div class="storage">
                        <p>
                        <td> How much file space do you need (Gb):
                        <select id="storage_value" name="stroage-cap" value="<?php echo $configs['File_Storage'];?>" onchange="calculatetotal()" >
                            <option  value="10">10</option>
                            <option  value="50" selected>50</option>
                            <option  value="150">150</option>
                            <option  value="250">250</option>
                            <option  value="350">350</option>
                            <option  value="450">450</option>
                            <option  value="550">550</option>
                            <option  value="650">650</option>
                            <option  value="1000">1000</option>
                            <option  value="5000">5000</option>
                        </select> </td>
                        </p>
                    </div>

                <tr>
                    <div class="shell">
                        <p>
                        <td> What shell do you want to use:
                        <select id="shell" name="shell">
                            <option value="BASH" >BASH</option>
                            <option value="TCSH">TCSH</option>
                        </select> </td>
                        </p>
                    </div>
                </tr>

                <tr>
                    <div class="GPU">
                        <p>
                            <td> Do you need acess to GPU resorces?
                            <input type="checkbox" id="gpu" name="gpu" value="<?php echo $configs['GPU'];?>" onchange="calculatetotal()"> </td>
                                <label for="gpu"></label>
                        </p>
                    </div>
                </tr>

                <tr>
                    <div class="one-on-one">
                        <p>
                        <td> Do you need one-on-one support?
                        <input type="checkbox" id="onesup" name="onesup" value="<?php echo $configs['One_on_One'];?>" onchange="calculatetotal()"> </td>
                        </p>
                    </div>
                </tr>

                <tr>
                    <div class="webhost">
                        <p>
                        <td> Will you need web hosting? 
                        <input type="checkbox" id"webhost" name="webhost" value="<?php echo $configs['Web_Hosting'];?>"  onchange="calculatetotal()"> </td>
                        </p>
                    </div>
                </tr>
                </tbody>
            </table>
        
            <table class="form_number_table">
                <tr>
                    <div class="slide_explination">
                        <p><h6>*Please click on the sliders to activate them and select the following options for your class: </h6></p>
                    </div>
                </tr>

                <tr>
                    <div class="slide-box">
                        <div id='Sbubble'>
                            <p><span id="sdude"></span></p>
                        </div>

                        <div class="student-min">
                            <p><?php echo $configs['Student_min'];?></p>
                        </div>

                        <div class="student-max">
                            <p><?php echo $configs['Student_max'];?></p>
                        </div>

                        <div class="student-con">
                            <input type="range" name="Sslide" min="<?php echo $configs['Student_min'];?>" max="<?php echo $configs['Student_max'];?>" value="20" step="10" class="Sslider" id="Sslide" onchange="calculatetotal()">
                            <p>Number of Students:<span id="sdude"></span></p>
                        </div>

                        <div id='Cbubble'>
                            <p><span id="cdude"></span></p>
                        </div>


                        <div class="CPU-min">
                            <p><?php echo $configs['CPU_min'];?></p>
                        </div>

                        <div class="CPU-max">
                            <p><?php echo $configs['CPU_max'];?></p>
                        </div>

                        <div class="CPU-con">
                            <input type="range" name="Cslide" min="<?php echo $configs['CPU_min'];?>" max="<?php echo $configs['CPU_max'];?>" value="16" step="32" class="Cslider" id="Cslide" onchange="calculatetotal()">
                            <p>Number of CPU's: <span id="cdude"></span></p>
                        </div>

                        </div>
                    </div>
                </tr>
            </table>
            <input type="hidden" id='cost_total' name="total_cost" value=""/>



<!--hidden values for php functions-->
    <div id="hidden_student" value="<?php echo $configs['Student_value'];?>"></div>
    <div id="hidden_cpu" value="<?php echo $configs['CPU_value'];?>"></div>
    <div class="hidden_memory" id="hidden_memory" value="<?php echo $configs['RAM_value'];?>"></div>

            <table class="Cost_Table">
                <tr>
                    <th>Field </th>
                    <th> # </th>
                    <th>Cost</th>
                </tr>
                <tr>
                    <td>Students</td>
                    <td id="student_num"><span id="sdude"></span></td>
                    <td id="student_cost"><span id="studentCost"></span></td>
                </tr>
                <tr>
                    <td>CPU's</td>
                    <td id="cpu_num"><span id="cdude"></span></td>
                    <td id="cpu_cost"><span id="cpuCost"></span></td>
                </tr>
            </table>

            <tr>

                    <div id="total_cost"><p id="cost" name="total_cost">Total Cost:</p></div>
                    </div>

                    <div id="submit">
                        <input type="submit" id="submit">
                    </div>

            <div id="cpatcha">
                <div class="form-item webform-component webform-component-textfield" id="webform-component-captcha-code">  
                    <img id="captcha" src="../securimage/securimage_show.php" alt="CAPTCHA Image" ?="">
                    <br>
		    <label for="captcha_code"><h4><font color="red">*</font>Captcha Code:</h4><b>You will need to do the math and enter the answer<br>(example 1+1 you would enter 2 as the captcha code). </b><span class="form-required" title="This field is required."><?php echo $captchaErr;?></span></label><br>
                    <input type="text" name="captcha_code" size="10" maxlength="6">
                    <br>
                    <a href="#/" onclick="document.getElementById('captcha').src = '../securimage/securimage_show.php?' + Math.random(); return false">[ New Image ]</a>
                </div>
            </div>
    </fieldset>
    </div>
</form>
