var skillCount=2;
var projectCount=2;
var i=0;
$(document).ready(function(){

            
            $(".link").bind('click',function(){
                var loc=$(this).attr('data-target');
                $(".contentWrapper").load(loc);
            });
            
            //var id=$('#eTypeLabel').parent().children('.input').attr('id');
            //$("#eTypeLabel").attr('for',$(this).parent().children('.input').attr('id'));

            $("select").change(function(e){
                $(this).children("option:selected").each(function(){
                    var data=$(this).attr("value");
                    switch(data){
                        case 'intro': $(".content").slideUp(300); $(".intro").delay(305).slideDown(); break;
                        case 'projects': $(".content").slideUp(300); $(".projects").delay(305).slideDown(); break;
                        case 'skill': $(".content").slideUp(300); $(".skill").delay(305).slideDown(); break;
                    }
                });
            }).change();


            //Add Rules
            $(".addskill").bind('click',function(){
                var data='<textarea class="materialize-textarea skillName" name="skill[]" placeholder="Enter here..." style="opacity: 0;">'.replace('1',skillCount);
                skillCount+=1;
                $(data).appendTo($('.skillwrap')).animate({'opacity':1},500)
            });

            //Add Rounds
            $(".addproject").bind('click',function(){
                var data='<div class="card" style="opacity: 0;"><input type="text" name="r[]" placeholder="Project Title" class="projectName"><textarea class="materialize-textarea projectDetails" name="rt[]" placeholder="Project Details"></textarea></div>'.replace('2',projectCount);
                projectCount+=1;
                $(data).appendTo($('.projectWrap')).animate({'opacity':1},500)
            });

            //Add Contacts
            

            $(".nextStep").bind('click',function(){

                            var heading=$(".heading").val();
                            if(heading=="")
                            {
                                //alert("Please Enter the heading");
                               // return false;
                            }
                            var intro=$(".introText").val();
                            if(intro=="")
                            {
                                //alert("Please Enter the Introduction");
                                //return false;
                            }
                            var skill={};
                            var r={};
                            var rd={};
                            var c={};
                            var cp={};
                            var project="";
                            var projectde="";
                            var ruless="";

                            $('.skillName').each(function(i) {
                                skill[i] = $(this).val();
                                if(skill[i]=="")
                                {
                                    //alert("Please enter your skills");
                                    //return false;
                                }
                            });

                            i=0;

                            $(".projectName").each(function(i){
                                r[i]=$(this).val();
                            });

                            i=0;

                            $(".projectDetails").each(function(i){
                                rd[i]=$(this).val();
                                if(rd[i]=="")
                                {
                                    //alert("Please enter your Project details");
                                    //return false;   
                                }
                            });

                            i=0;
                            var x;
                            for (x in r) {
                                project = " "+  project+r[x] + " , ";
                            }
                            //round =round+"]";
                            for (x in rd) {
                                projectde =" "+  projectde+rd[x] + " ,";
                            }
                            //roundde =roundde+ "]";
                            for (x in skill ) {
                                ruless =" "+  ruless+skill[x] + " ,";
                            }
                            var obj = '{"'+heading+'":[{'
                                   +'"intro": "'+intro +'",'
                                   +'"skill": ["'+ruless+'"],'
                                   +'"project": ["'+project+'"],'+'"project_Details" :["'+projectde+'"]}]'+'}';
                            console.log(obj);
                            if(obj.length>0){
                            $.ajax ({
                                   type: "POST",
                               url:"./skills/skill_upload.php",
                               data:{id: obj , head: heading},
                               success: function() {
                                  alert("Content Uploaded Successfully");
                                  $(".contentWrapper").load("./functions/view.php");
                                  return false; 
                                  
                               }
                            });
                            }

                });
            $('select').material_select();
            $(".button-collapse").sideNav();  
});

