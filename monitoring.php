<?php
/*
Template Name: Monitoring
*/
?>
<?php get_header(); ?>
    <div class="container">
		<?php if (have_posts()) :
			while (have_posts()) : the_post();
     			if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs();?>

				<?php  
					/*   скрипт на дату/время   */
                    date_default_timezone_set('Europe/Minsk');
                    
                    $array=array("20.06.2021", "27.06.2021", "04.07.2021", "11.07.2021", "18.07.2021");                    
                    $currentDate=strtotime('now');
                    $hour=date("H");
                    $echo_hour="18";
                    $echo_date=$currentDate;
                    
                    foreach($array as $i){

                        $date=strtotime($i);

                        /*Если вс то выводим сб на 18.00*/
                        if(date('d.m.Y', $currentDate)==date('d.m.Y', $date)){
                            
                            $echo_date=strtotime("-1 day", $currentDate);
							break;
                        }
                        /*Если пн до 09.00 то выводим сб на  18.00*/
						elseif(date('d.m.Y', $currentDate)==date('d.m.Y',strtotime("+1 day", $date)) && $hour<9){
                            
                            $echo_date=strtotime("-2 day", $currentDate);
							break;
                        }
                        /*вывод реал*/
						else {
							if ($hour<9){
								$echo_hour='18';
								$echo_date=strtotime("-1 day", $currentDate);
							}
							if ($hour >= 9) {
								$echo_hour='09';
							}
							if ($hour >=12) {
								$echo_hour='12';
							}
							if ($hour >=15) {
								$echo_hour='15';
							} 
							if ($hour >=18) {
								$echo_hour='18';
                            } 
                        }
                        
					}
                    
				?> 

				<div class="row">
					<div class="col-sm-12">
						<h1 class="section-caption" style="text-align:center"><?php single_post_title(); echo " (".date('d.m.Y', $echo_date).") на ".$echo_hour."<sup>00</sup>"?></h1>
                    </div>
				</div>
				<div class="content">
					<?php the_content();?>
				</div>
			<?php endwhile;
		endif; ?>
    </div>
<?php get_footer(); ?>
