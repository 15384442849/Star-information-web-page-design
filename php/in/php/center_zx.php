        <div id="center">
		<div id="lian">
            <div id="jl"><p><h4>站内</h4>搜索</p></div>
		   <form action="zx.php" method="post">		
            <div id="g"><label>关键字：</label><input type="text" name="keywords" > </div>   
	        <input type="submit" value="搜索" id="sub" name="sub">		
		    </form>
				
				
            </div>
        <div id="two">
		<img src="../images/xiaotu.png" width="15px"  height="15px">
        <p>推荐明星新闻</p>
             <hr/>
              <ul>
				  <?php
                              include 'conn.php';
                              $sql="select * from news order by id limit 0,20";
				             
                              $res=$conn->query($sql);
                              while($row=mysqli_fetch_array($res))
                              {
                                  ?>
                                   <div id="juli">
									   	<p id="ming"><?php 					echo "<td>
							            <a href='zx.php?id={$row['id']}'>查看详情</a>
						                </td>";?></p>
                                       <p id="ming"><?php echo $row["title"];?></p>
									   <p id="ri"><?php echo $row["addtime"];?></p>
                                   </div>
                                   <?php
                              }
?>
				  
              </ul>
              </div>
			
	
		
<div id="right">	
<h2>您所选择的明星资料</h2>
	                              <?php
		                       $conn=mysqli_connect("localhost","root","12345678","qikan");
                              $id = $_GET['id'];
	                           $keywords = $_POST['keywords'];
	                           
	                          if($id != ""){
								  $sql="select * from news WHERE id='$id'";
							       $res=$conn->query($sql);
							  }
                              else if($keywords != ""){
								  $sql="select * from news WHERE keywords='$keywords'";
								  $res=$conn->query($sql);
							  }
                              while($row=mysqli_fetch_array($res))
                              {
                                  ?>
	                  <div id="right_a">
									   <p id="ri_a">明星资料编号：<?php echo "{$row['id']}";?></p>  
									   <p id="ri_b">明星资料标题：<?php echo "{$row['title']}";?></p>
		<div>
									   <p id="ri_c">关键字：<?php echo "{$row['keywords']}";?></p> 
										<p id="ri_d">明星名字：<?php echo "{$row['autor']}";?></p>
									   <p id="ri_e">发布时间：<?php echo "{$row['addtime']}";?></p>
			</div>
		<hr/>
									   <p id="ri_f">内容：<br/><em><?php echo "{$row['content']}";?></em></p> 
									   <p id="ri_g">
							           <a href="download.php?action=download&fname=<?php echo "{$row['id']}";?>.jpg">下载资料</a> 
						               </p>
				                    <hr/>

                                   <?php
                              }
                              ?>
		</div>
			
		</div>	
	
	<div id="o">
	</div>
						
        </div>