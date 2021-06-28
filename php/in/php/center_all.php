            <div id="center">
				
			 <div id="pian">
            <div id="k"><img src="../images/xiaotu.png" width="15px"  height="15px">
           <p>今日明星推荐</p></div>
            <hr/>
            <img src="../images/mxz1.png" class="p">
            <img src="../images/mxz2.png" class="p">
            <img src="../images/mxz3.png" class="p">
            <img src="../images/mxz5.png"  class="p">
            </div>
				
              <div id="three">
              <img src="../images/xiaotu.png" width="15px"  height="15px">
              <p>网站简介</p> 
              <hr/>
              <div id="i">
              <p >星期追星网是追星者们浏览明星资料的一个网站,星期追星网站会进行24小时滚动报道内地、香港、外国明星等资料和新闻。每日会有明星资料和日常生活管理者进行更新。</p></div>
             <div  id="t"><img src="../images/dacall.png"> </div>
            </div>
            <div id="for">
				
				
				
				
				<div id="one">				
              <img src="../images/xiaotu.png" width="15px"  height="15px">
              <p>明星图片</p>
				<hr/>
<div id="e_c">
<div id="e">
<div id="e_a">
<a href="liuyan.php"><img id="lun" class="e_a_1" src="../images/mx4.png" width="300px" height="260px"></a>
<img class="e_a_1" src="../images/mx3.png" width="300px" height="260px">
<img class="e_a_1" src="../images/mx2.png" width="300px" height="260px">
<img class="e_a_1" src="../images/mx1.png" width="300px" height="260px">	
</div>
<div id="e_b">
<ul>
      <li class="e_a_2">1</li>
      <li class="e_a_2">2</li>
      <li class="e_a_2">3</li>
      <li class="e_a_2">4</li>
</ul>
</div>
</div>
	</div>
	</div>
				
		
			
			
			
              <div id="two">
              <img src="../images/xiaotu.png" width="15px"  height="15px">
              <p>明星实况</p>
             <hr/>
              <ul>
				  <?php
                              include 'conn.php';
                              $sql="select * from news order by id limit 0,8";
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
				
				
				
            <div id="lian">
            <div id="jl"><p><h4>站内</h4>搜索</p></div>
		   <form action="zx.php" method="post">		
            <label>关键字：</label><input type="text" name="keywords"> </br>   
	        <input type="submit" value="搜索" id="sub" name="sub">		
		    </form>
				
				
            </div>
           </div>
		
		
		
		
		
            </div>