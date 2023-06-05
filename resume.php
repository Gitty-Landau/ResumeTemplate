
<?
 $name = "Gitty";
$designation = "Ms";
$organizationName = "Compuskills";
$email = "gittylandau04@gmail.com";
$objectiveContent = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.";
$tHead1 = "Duratioin";
$tHead2 = "Qualification";
$tHead3 = "Institute/School";
$tHead4 = "Result";
$tData= "abc"


include "consts.php"; 
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<link rel="stylesheet" href="style.css" />
  
</head>
<body>

        <div class="container">
	    <header>
        <h1 id="name"><?echo $name;?> </h1>
        <div id="designation">
		
			<span class="title"><?echo $designation; ?></span>
			<span class="organization"><? echo $organizationName; ?></span>
		
		</div>
        <div class="contact">
		<div class="email"><? echo $email; ?></div>
		</div>
		
        </header>
        
       <div class="content" role=main>
        <section id="Objective">
        <h2 class="title"><? echo H2A; ?></h2>
        <div class="description">
            <p>
                <? echo $objectiveContent; ?>
            </p>			
        </div> 
    </section>
    <section id="Education">
    <h2 class="title"><? echo H2B; ?></h2>
    <div class="description">

    <table>
					<thead>
						<td><? echo $tHead1; ?></td>
						<td><? echo $tHead2; ?></td>
						<td> <? echo $tHead3; ?></td>
						<td><? echo $tHead4; ?></td>
					</thead>

                    <tr>
						<td><? echo $tData; ?></td>
						<td><? echo $tData; ?></td>
						<td><? echo $tData; ?></td>
						<td><? echo $tData; ?></td>
					</tr>
                    <tr>
						<td><? echo $tData; ?></td>
						<td><? echo $tData; ?></td>
						<td><? echo $tData; ?></td>
						<td><? echo $tData; ?></td>
					</tr>

                    </table>
        
                    </section>
			
		<section id="projects">
			<h2 class="title"><? echo H2C; ?></h2>
			<div class="description">

            </div> <!-- end description -->
		
				<!-- Project 1 -->
				<section class="project">
					<h3 class="title">Title of the project</h3>
					<div class="meta">
						<span class="field">Project Field</span> <span class="date">Aug 2010 - Nov2010</span>
					</div>
					<p class="description"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
				</section> <!-- end project description -->
				
				<!-- project 2 -->
				<section class="project">
					<h3 class="title">Title of the project</h3>
					<div class="meta">
						<span class="field">Project Field</span> <span class="date">Aug 2010 - Nov2010</span>
					</div>
					<p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
				</section> <!-- end project description -->


				<!-- project 3 -->
				<section class="project">
					<h3 class="title">Title of the project</h3>
					<div class="meta">
						<span class="field">Project Field</span> <span class="date">Aug 2010 - Nov2010</span>
					</div>
					<p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
				</section> <!-- end project description -->				
				
				</div> <!-- end description -->
		</section>	
				
      
   	
		
		
		
	
	
	
		
		
		
		
				
					
			
			
			
			
	

		<!-- Training/ seminars -->
		
		
		
		<!-- Scholistics Achievements -->
		
		
		
		<!-- Technical Skills -->
		
		
		<!-- Extra-Curricular Activities -->
		
		
		<!-- Personal Informations -->
		
		
		<!-- References -->
		
		
		
		<!-- Declarations -->

	
		<!-- signatory -->
	
	
	
	
	</div> <!-- end main content -->
	
	
	
	
	
	
	
	
	
	
	
	
	
	</div> <!-- end container -->
	
</body>
</html>