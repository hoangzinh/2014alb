<?php
//Header("Content-type: text/html; charset=utf-8");
ob_start();
$content_user_wanna_go = NULL;
$tmp_content = NULL;
$info_content =  null;
$info_title = null;
$share_image = null;
if(isset($_GET['toimuonden']))
{
	switch ($_GET['toimuonden'])
	{
	case "vung-dat-cua-mua":
		$tmp_content = "{image : ' http://farm4.static.flickr.com/3709/13562445295_ab4e99a175_b.jpg', title : 'Dấu Mưa'},                                
                                {image : 'https://lh3.googleusercontent.com/-T75nx8C11P0/U0Fid2G_KfI/AAAAAAAAAEw/fQBTpSScR7Q/w480-h345-no/20090402_859d03f94058a02f0972LC5nQAxvNnNd.gif', title: '...'},
                                {image : 'https://lh5.googleusercontent.com/-lBXY3xGWZAo/U0FimV1Q_uI/AAAAAAAAAE4/fydvJ8KfhDI/w500-h400-no/46259203_42838785_ochen_krasivuyy_dozhd1.gif', title: 'Mưa rơi nặng hạt hay nặng lòng'},
                                {image : 'https://lh3.googleusercontent.com/-xIkJ7HVz2MI/U0FittGwmqI/AAAAAAAAAFA/IaV1bk4I75w/w440-h330-no/48f857b6_taochu.com_rain201.gif', title: 'Em vẫn chờ tin của anh từ một nơi nào đó trong mưa gửi đến'},
                                {image : 'https://lh5.googleusercontent.com/-Y8qreATiUWc/U0Fi9Ly8l7I/AAAAAAAAAFI/nJBgBa7g02U/w650-h432-no/29ehkdi.gif', title: 'Mưa gào thét, giật tung những cành cây mảnh khảnh như oán than cho những số phận le lói'},
                                {image : 'https://lh4.googleusercontent.com/-BDgeP6HioLY/U0Fi-9is3-I/AAAAAAAAAFQ/QxNi8Lo3HW0/w450-h340-no/5ab23e7b6fed%255B1%255D.gif', title: 'Bông hoa anh tặng em hôm nào....'},
                                {image : 'https://lh3.googleusercontent.com/-TssbO26GQrU/U0FjClWIbEI/AAAAAAAAAFY/drmrC4bMaXU/w640-h398-no/Awesome-Animated-Gif.gif', title: 'Mưa là người bạn của ta. Ta có thể che giấu cảm xúc trước tất cả mọi người. Nhưng đứng trước mưa, hãy để cảm xúc ta gào thét'},
                                {image : 'https://lh5.googleusercontent.com/-Th_seN_zX-4/U0FjGCd8GdI/AAAAAAAAAFg/FDuM0n5RlCs/w417-h273-no/Rain-garden1.gif', title: 'Mưa, mưa của những kỉ niệm bên nhau ngày nào'},
                                {image : 'https://lh5.googleusercontent.com/-0FvRKwMZNgc/U0FjHxu7D5I/AAAAAAAAAFo/fsJHgIb_zXI/w330-h479-no/anhdepblog.com_rain36.gif', title: 'Người ngắm mưa rơi ngoài cửa sổ. Mưa luồn khe cửa chạm nhà thơ'},
                                {image : 'https://lh5.googleusercontent.com/-FcAIr2-3Tjk/U0FjIx4aq5I/AAAAAAAAAFw/3IEspOGLm1I/w400-h300-no/conduongmua.gif', title: 'Mưa như cố gột trôi những bụi bặm đường phố, gột trôi cả những hạt cát cuộc đời, mưa nhẹ nhàng và thầm lặng'},
                                {image : 'https://lh5.googleusercontent.com/-Dk0HJ_gfEGM/U0FjOm5qQtI/AAAAAAAAAF4/gOy0ZAQJY0Y/w500-h375-no/muathuduoimua1vk.gif', title: 'Ngồi chờ ai trong mưa'},
                                {image : 'https://lh3.googleusercontent.com/-0NlpbNKtd6I/U0FjXVdbLSI/AAAAAAAAAGI/GpulEXD_So8/w500-h252-no/tumblr_m1ip9nIiqn1r3bteso1_500.gif', title: 'Tóc...tóc...tóc... Âm thanh của sự khởi đầu hay là sự kết thúc của 1 cơn mưa'},                        
                                {image : 'https://lh3.googleusercontent.com/-15q9mTtEQeE/U0FjeERjsnI/AAAAAAAAAGQ/Xcq-nEp7ZA4/w500-h217-no/tumblr_mngb2jFLB11riolmio1_500.gif', title: 'Mưa. Mưa len lõi qua đôi bàn tay. Len lõi vào từng ngõ ngách trong tâm hồn chúng ta'},
                                {image : 'https://lh5.googleusercontent.com/-gezj5or6Yy8/U0FjfMp--4I/AAAAAAAAAGY/mbStHumLdYk/w344-h144-no/tumblr_mqt9rlcuU91sd2qdpo1_400.gif', title: 'Giọt mưa ngạo nghễ ngoài hiên. Giọt thầm lặng lẽ ngồi thiền nhớ ai?'},
                                {image : 'https://lh3.googleusercontent.com/-Y9EuU5GKbbo/U0FjhzMxo9I/AAAAAAAAAGg/fSeu6cxOL-A/w500-h281-no/tumblr_mz60uaieOc1sga7ujo1_500.gif', title: 'Giọt mưa hay giọt lệ lòng? Chỉ có bạn mới biết được.'}
                                ";
$share_image="https://farm4.staticflickr.com/3709/13562445295_ab4e99a175_n.jpg";
                $info_title="Cảm xúc đi trong mưa";
                $info_content="<p>Ai đó nói rằng những cơn mưa đi liền với sự tốt đẹp. Người bảo nụ hôn lãng mạn nhất là dưới mưa và đôi uyên ương nào cùng nhau ngắm mưa sẽ được hạnh phúc.</p> <br /> 
<p>Cơn mưa là niềm mong mỏi của những con người tất bật chạy đua với cái đồng hồ giữa trưa Sài Gòn oi ả. Cơn mưa báo hiệu hơi thở mùa xuân, xua đi sự ngự trị của tuyết trời lạnh giá.</p> <br />
<p>Mưa làm nhạt nhoà trên khoé mắt người con gái lẻ loi. Nước mưa chen lẫn nước mắt người phụ nữ gánh hàng rong khi đêm buông xuống tĩnh mịch, chỉ còn quanh bà gánh hàng ế và tiếng côn trùng kêu nghe đến não lòng. Mưa hoà tan giọt mồ hôi đọng trên nếp nhăn của người lao động vốn đã xem khắc khổ như hơi thở của mình. Mưa như cố gột trôi những bụi bặm đường phố, gột trôi cả những hạt cát cuộc đời, mưa nhẹ nhàng và thầm lặng...</p> <br />
<p>Có những khi mưa mang trong mình nỗi giận dữ, trĩu nặng những âu lo của cuộc đời. Mưa gào thét, giật tung những cành cây mảnh khảnh như oán than cho những số phận le lói như ngọn đèn bấc. Có hôm mưa trắng xoá một góc trời, kết nối nhau thành lớp màng mỏng giấu đi đằng sau là những tâm tư tưởng chừng như bị xé toang vì quá yếu ớt. Mưa dữ dội tuôn hàng nghìn giọt nước nhỏ nhoi như sự cam chịu của người phụ nữ bỗng chốc vỡ oà trong tiếng nấc tưởng như đã ngẹn đắng từ lâu.</p> <br />
<p>Đôi lúc người ta tìm đến mưa như những điều nhẹ nhàng và lãng mạng. Đôi lúc, người ta xem mưa là bạn, là người yêu nhưng có lúc người tìm đến mưa như hiện thân của những điều cay đắng, để gào thét, tuyệt vọng. Cuộc sống không bao giờ đứng lại, rồi sẽ lại có những ấm áp xua tan giá lạnh, sẽ lại có cái ác chen lấn tâm hồn, sẽ có những vòng xoay của đối nhân xử thế mà chưa ai dám chắc rằng người cứ tốt rồi người sẽ hạnh phúc.</p> <br />
<p>Mưa cũng có tâm hồn và đâu đó xa xôi, sự an ủi bằng mùi lạnh của mưa đôi khi còn ấm áp hơn cả những lời nói ngon ngọt của người đời.</p> <br />
<p>.......Và tôi vẫn đứng đây, say trong cơn mưa.</p> <br />
<p>Tác giả: Thúy Hằng</p>";
		break;
	case "vung-dat-cua-bien":
		$tmp_content = "{image : ' http://farm8.static.flickr.com/7445/13562461745_756b89f53c_b.jpg', title : 'Đó là vùng đất của những sự sống dưói nuớc'},
                                {image : ' http://farm8.static.flickr.com/7169/13562530523_15d9dbeb36_b.jpg', title : 'Là vùng đất của những con sóng xanh nuớc biếc đẹp tuyệt vời'},
                                {image : ' https://lh6.googleusercontent.com/-TMj6qrfGXwE/U0Fe3TjxQLI/AAAAAAAAADU/Mh-a-ZW8fvs/w490-h255-no/tumblr_lvc7qcUech1qf8g5io1_500.gif', title : ''},
                                {image : ' https://lh3.googleusercontent.com/-x_CSwnyYd0I/U0FhRdELgCI/AAAAAAAAAD4/UgXqYfntQQg/w500-h333-no/tumblr_m5a79oUAwC1r3bteso1_500.gif', title: 'Hoàng hôn trên biển - Ngày sắp tàn'},
                                {image : ' https://lh3.googleusercontent.com/-u-OQoevesnM/U0FhRPaO2pI/AAAAAAAAAD0/MfLOFEyZrh8/w500-h269-no/tumblr_ms5km5k72Z1snbkyxo1_500.gif', title: 'Biển nhuốm một màu buồn về đêm'},
                                {image : ' https://lh3.googleusercontent.com/-_2gX-0qrxWY/U0FhVLOSTvI/AAAAAAAAAEA/XLXGbYxfGQw/w336-h189-no/tumblr_mt0l11eK7Z1rifp1ho1_400.gif', title: 'Bạn đã bao giờ thử luớt sóng? Hãy ra biển ngay và vui đùa với nó'},
                                {image : ' https://lh4.googleusercontent.com/-u_KRo2ZjHAo/U0FhZWlV_aI/AAAAAAAAAEI/90WWH3nFipc/w500-h211-no/tumblr_mxump7FeO91rngmtco1_500.gif', title: 'Biển và núi phác họa thành một bức ảnh thiên nhiên thật kì vĩ'},
                                {image : 'https://lh6.googleusercontent.com/-EfifGE1DOC0/U0Fhf1Yh0-I/AAAAAAAAAEY/kCYcizzqdyo/w500-h280-no/tumblr_n0qxmrMiH81tro5x0o1_500.gif', title: 'Nhưng đôi khi Biển cũng tỏ ra giận dữ, tạo thành những đợt sóng như muốn phá tan tất cả'},
                                {image : 'https://lh4.googleusercontent.com/-09BzEMui7Pg/U0FhdXdd5JI/AAAAAAAAAEQ/qB92xir_Rts/w500-h280-no/tumblr_n03swjqSor1r3nnfeo1_500.gif', title: 'Một góc nhìn duới mặt biển'},
                                {image : ' http://farm8.static.flickr.com/7429/13562448445_057e8ee1fe_b.jpg', title : 'Thật hùng vĩ'},
                                {image : ' http://farm8.static.flickr.com/7307/13562521193_bf6dbedaaf_b.jpg', title : 'Nói đến bờ biển thì không thể thiếu bãi cát trắng và hàng cây xanh chạy dọc biển'},
                                {image : ' http://farm8.static.flickr.com/7304/13562547713_97857b8350_b.jpg', title : 'Và những con sóng nhỏ lăn tăn, e thẹn truớc mặt bãi cát trắng'}
                                ";
$share_image="https://c2.staticflickr.com/8/7304/13562547713_97857b8350.jpg";
$info_title="Ngày nhớ biển";
                $info_content="<p>Như một sự sắp đặt tình cờ, mỗi lần ra biển là mỗi lần lòng tôi có sóng. Tôi biết sóng biển chẳng thấm vào đâu so với ngọn sóng lòng trong tôi. Âm ỉ nhưng đau nhói.</p> <br />
<p>Tôi thích tiếng sóng biển rì rào, đôi khi nhìn ra ngoài khơi xa trong bóng đêm. Cái bóng đêm thỉnh thoảng làm tôi sợ hãi. </p> <br />
<p>Tôi thích biển, bởi nếu tôi có lỡ khóc, tiếng nấc sẽ hòa vào tiếng sóng và trở thành một âm thanh của tự nhiên.</p> <br />
<p>Tôi thích cảm giác lành lạnh của biển sớm. Thích một mình thả bước dài dọc bờ cát. Vị mặn của muối và gió quấn lấy tôi, như thể tôi đang được nâng niu, vỗ về. Tôi thấy lòng mình dịu lại. Bao cảm giác bất an, lo toan và suy nghĩ bám lấy tâm trí tôi tan biến. Thực sự tôi thấy lòng mình bình yên mỗi khi đi dạo ở biển. Cái cảm giác ấy không gì thay thế được, cũng không ai có thể mang lại.</p> <br />
<p><center>Nếu thật buồn em cứ về với Biển</p>
<p><center>Biển vẫn xanh rờn như thuở mới vừa yêu</center></p>
<p><center>Dấu hết bão dông vào đáy lòng sâu thẳm</center></p>
<p><center>Biển yên lành, Biển hát với phiêu diêu</center></p> <br />
<p><center>Nếu thật buồn em cứ về với Biển</center></p>
<p><center>Về bãi cát xưa tìm dấu tích lâu đài</center></p>
<p><center>Em sẽ thấy cát dưới chân mằn mặn</center></p>
<p><center>Ngỡ chạm vào xưa cũ dấu chân ai</center></p> <br />
<p>Hôm nay bỗng nhiên tôi muốn ra biển. Mặc dù đi biển không nhiều, nhưng tôi vẫn thích cái cảm giác yên bình mà biển mang lại.</p> <br />";
		break;
	case "ha-noi":
		$tmp_content = 	"{image : 'http://farm8.static.flickr.com/7033/13539918933_aa9c117b75_b.jpg', title : 'Văn miếu Quốc Tử Giám - Truờng Đại học đầu tiên của Việt Nam'},	
                                {image : 'http://farm4.static.flickr.com/3721/13539942293_8e6b9342de_b.jpg', title : 'Cổng vào Văn miếu'},
                                {image : 'http://farm3.static.flickr.com/2869/13539817625_511c9e7bfa_b.jpg', title : 'Phủ Chủ tịch'},
                                {image : 'http://farm4.static.flickr.com/3764/13540138894_87a3d74208_b.jpg', title : 'Ngôi chùa một cột'},
                                {image : 'http://farm4.static.flickr.com/3724/13539823865_dede939a45_b.jpg', title : 'Chùa Trấn quốc'},
                                {image : 'http://farm4.static.flickr.com/3669/13539933063_2f4212be3c_b.jpg', title : 'Nhà thờ Lớn Hà Nội'},
                                {image : 'http://farm8.static.flickr.com/7103/13539851785_0e5f38a834_b.jpg', title : 'Nhà sàn Bác Hồ'},
                                {image : 'http://farm8.static.flickr.com/7130/13539872345_a79a5e3d51_b.jpg', title : 'Nhà hát Thành phố'},
                                {image : 'http://farm8.static.flickr.com/7237/13539979713_40c9e9684e_b.jpg', title : 'Chợ Đồng Xuân'},
                                {image : 'http://farm8.static.flickr.com/7048/13539945833_4c6f0609c3_b.jpg', title : ''},	
                                {image : 'http://farm8.static.flickr.com/7012/13501259604_193063be97_b.jpg', title : 'Cầu Thuê húc'},
                                {image : 'http://farm4.static.flickr.com/3768/13539970023_c73ff1107b_b.jpg', title : 'Cầu Long Biên - chứng nhân di tích lịch sử'},
                                {image : 'http://farm4.static.flickr.com/3783/13539973963_23600f5a70_b.jpg', title : 'Tòa nhà Keangnam'},	
                                {image : 'http://farm4.static.flickr.com/3728/13503073213_9c13f6e1a6_b.jpg', title : 'Lăng Chủ tịch'},
                                {image : 'http://farm4.static.flickr.com/3798/13539830615_6a04e94612_b.jpg', title : 'Một góc phố Hà Nội về đêm'},	
                                {image : 'http://farm3.static.flickr.com/2895/13539918343_26224262f7_b.jpg', title : 'Hồ Guơm trong đêm'},
                                {image : 'http://farm8.static.flickr.com/7230/13539989843_d679fcc466_b.jpg', title : 'Một buổi sáng tinh mơ ở Hà Nội'},
                                {image : 'http://farm8.static.flickr.com/7161/13539954983_c0d94d18c7_b.jpg', title : 'Những cô bán hàng rong trên phố'},
                                {image : 'http://farm8.static.flickr.com/7384/13539966883_6580a17d1e_b.jpg', title : 'Nơi hèn hò và chấp cánh cho tình yêu lứa đôi'}
                                ";
$share_image="https://farm8.staticflickr.com/7033/13539918933_aa9c117b75_n.jpg";
                $info_title = "Hà Nội trong trái tim tôi";
                $info_content = "<p>Hà Nội mảnh đất nghìn năm văn hiến, trải qua biết bao trang sử hào hùng nhưng vẫn luôn mang trong mình một nét đẹp lãng mạn, một nét đẹp bình yên, một nét đẹp đến nao lòng không chỉ với những du khách ghé thăm Hà Nội mà ngay cả với những con người đang sống tại mảnh đất thủ đô thân yêu.</p>
<p><center>* * *</center></p>
<p>Hà Nội đẹp lắm, Hà Nội đẹp trong từng khoảnh khắc. Tạm biệt màn đêm là tiếng chim ca, những giọt sương còn lắng đọng trên những nhành cây, kẽ lá. Sớm mai của Hà Nội là sớm mai của mùi, của hương, của cảnh, một sớm mai luôn làm ta nhớ đến hình ảnh của những cụ già bên bờ hồ tập dưỡng sinh, nhớ đến những lời rao bán hàng rong buổi sáng, nhớ đến tiếng trẻ í ới gọi nhau đến trường. Vẻ đẹp của sớm mai Hà Nội là một sự bình yên đến tĩnh lặng. Cảm nhận hết cái yên bình đấy, mỗi người trong chúng ta sẽ có một cảm xúc về sớm mai Hà Nội cho riêng mình. </p>
<br \>
<p>Nếu như sớm mai Hà Nội là sự nhẹ nhàng đến lan tỏa thì trưa Hà Nội lại là những ánh nắng chói chang, những ánh nắng gắt, xuyên qua kẽ lá tạo thành tấm vải kẻ sọc trên đường phố. Là dáng vẻ mệt mỏi của cô chú công nhân với những bữa ăn vội vàng bên hè phố, những ánh mắt vô hướng cùng sự suy tư hiện rõ trên khuôn mặt </p>
<br \>
<p>Chiều đến, ngồi uống café trên những nhà hàng ,thả lỏng cơ thể, buông ánh mắt nhìn dòng người qua lại, sự ngược xuôi của ôtô, xe máy, của những gánh hàng rong, tiếng cười nói của học sinh rủ nhau xả cơn đói bên những quán ăn lề đường. Sải dài bước chân trên những con phố thân thuộc của Hà Nội, những con phố luôn sáng ánh đèn, bất chợt, bước qua sợi chỉ ranh giới giữa những nét kiến trúc cổ với những nét kiến trúc hiện đại. Chân phải bước sang mà có cảm giác như chân trái kia đã cách xa chân phải đấy một thời kì, một không gian, một cảm giác_một sự cảm nhận khác biệt rõ rệt trong lòng thành phố. Khu phố cổ với những ngôi nhà rêu phong, gạch đỏ, trầm lặng đứng, và trước sân nhà nơi cánh cửa gỗ đã ngả màu theo thời gian, là những cụ già ngồi trò chuyện bên ly nước chè, cùng nhau nhớ lại những ngày xưa. Bỗng từ xa, một cô cháu gái thướt tha trong tà áo dài đi học về thì lại chợt mỉm cười vì thấy hình ảnh xưa kia trong đó… </p>
<br \>
<p>Đêm Hà Nội, trời hơi se lạnh, bừng sáng lên là ánh đèn đường, đèn chiếu, đem đến những sắc màu của tối, của đêm Hà Nội. Sau một ngày làm việc với những lo toan, mệt mỏi, thì đêm đến là sự thư giãn, thoải mái bên gia đình, người thân. Chỉ là cùng nhau dạo phố, cùng nhau ngắm cảnh Hồ Gươm ban đêm, nhưng tất cả là thói quen, là nếp sống của người Hà Nội. Tiếng cười nói, tiếng xe, tiếng đài hai bên đường làm Hà Nội như trẻ trung, căng đầy sức sống. </p>
<p><center>* * *</center></p>
<p>Hà Nội của tôi là thế, đơn jản đến từng chi tiết, dễ cảm nhận đến từng chi tiết, thuần khiết và trong lành đến từng chi tiết. Hà Nội trong trái tim tôi là thế, với những con người thân thiện, nụ cười luôn nở trên môi như chính bản thân họ vậy. Một nghìn năm văn hiến, với những thay đổi về địa hình, kiến trúc, nhưng, tâm hồn Hà Nội, vẻ quyến rũ mà chỉ một lần gặp sẽ nhớ mãi, sẽ tồn tại theo năm tháng…và đó, là những điều làm nên:\"Hà Nội trong trái tim tôi\".</p>";
		break;				
	case "sai-gon":
		$tmp_content = "{image : 'http://farm3.static.flickr.com/2897/13541904004_95021b2cd4_b.jpg', title : 'Bưu điện thành phố'},
                                {image : ' http://farm3.static.flickr.com/2809/13541909324_c86ae65353_b.jpg', title : 'Cầu Phú Mỹ - cây cầu dài nhất thành phố'},
                                {image : ' http://farm4.static.flickr.com/3696/13541623395_3eca732700_b.jpg', title : 'Hồ Bán nguyệt'},
                                {image : ' http://farm4.static.flickr.com/3818/13541913954_975744fe5a_b.jpg', title : 'Sài Gòn về đêm'},
                                {image : ' http://farm8.static.flickr.com/7139/13541593885_f7fd84dd91_b.jpg', title : 'Dinh độc lập'},
                                {image : ' http://farm8.static.flickr.com/7082/13541594535_3be5300164_b.jpg', title : 'Cầu Ánh sao - cây cầu tình yêu của giới trẻ'},
                                {image : ' http://farm3.static.flickr.com/2822/13541923594_296c584c7b_b.jpg', title : 'Hồ con rùa'},
                                {image : ' http://farm8.static.flickr.com/7296/13541712293_eb4facbfc1_b.jpg', title : 'Hầm Thủ Thiêm'},
                                {image : ' http://farm8.static.flickr.com/7455/13541930094_74ffb399da_b.jpg', title : 'Chợ Bến Thành'},
                                {image : ' http://farm8.static.flickr.com/7203/13541956194_5cb479d20f_b.jpg', title : 'Tòan cảnh chợ Bến Thành về đêm'},
                                {image : ' http://farm4.static.flickr.com/3811/13541713643_551114fc4d_b.jpg', title : 'Tòa tháp Bitexco - tòa tháp cao nhất thành phố'},
                                {image : ' http://farm4.static.flickr.com/3796/13541646015_bf7e39c4a2_b.jpg', title : 'Nhà thờ Đức Bà'}						
                                ";
$share_image="https://farm4.staticflickr.com/3696/13541623395_3eca732700_n.jpg";                                                
                $info_title="Tản mạn Sài Gòn" ;
                $info_content="<p>Sài Gòn đối với đa số dân Sài Gòn gạo cội không phải là \"thành phố 10 mùa hoa\", \"thành phố mang tên Bác\", hay thành phố cay cú \"tôi mất người như người đã mất tên\", ...</p><br />
<p>Sài Gòn hiền lành hơn thế nhiều. Dân Sài Gòn vốn vẫn thờ ơ với chính trị, nhất là thứ chính trị Salon vô bổ, nhiều lời lẽ, thiếu tính thực tế.</p><br />
<p>Dân Sài Gòn chính hiệu \"con nai vàng\" chẳng bao giờ gọi Sài Gòn là thành phố Hồ Chí Minh. Không nhất thiết là vì lý do chính trị. Thằng Tí thằng Tèo trong mắt bà ngoại trăm năm vẫn là thằng Tí thằng Tèo, bất kể địa vị xã hội của nó là gì.</p><br />
<p><center>* * *</center></p>
<p>Sài Gòn, dù trong thời buổi khó khăn nhất, vẫn như một cô tiểu thư đài các: đỏng đảnh đôi chút mà dễ thương thiệt nhiều.</p><br />
<p>Nhắc đến Sài Gòn người ta hay nhắc đến mưa, nhưng tôi lại nhớ dai dẳng cái nắng gay gắt của nó.</p><br />
<p>Nhà tôi ở một con đường nhỏ. Trưa hè đặt cái \"lưng dài vai rộng\" xuống nền gạch bông mát lịm, ngắm bầu trời xanh ngắt, gió nhẹ hiu hiu, thì không có nơi nào trên quả đất này cho cảm giác thanh bình hơn.</p>
<p><center>\"Một ngõ vắng xôn xao</center></p>
<p><center>Nằm trong lòng phố lớn ...\"</center></p>
<p>Khác với Hà Nội, không gian Sài Gòn rất thoáng, chí ít là cách đây hơn 15 năm. Không gian của một buổi trưa hè hiu gió còn thoáng hơn vạn lần. Tôi luôn có cảm giác mình có thể  bay bổng lên, thò tay với cụm mây bồng bềnh trêu ngươi.</p><br />
<p>Người Sài Gòn cũng thoáng như không gian Sài Gòn vậy! Không đâu có thể dễ có nhiều bạn, và bạn không tồi, như ở Sài Gòn. Không chỗ nào trên đất Việt Nam người ta sống năng động và khoáng đạt hơn ở Sài Gòn.</p><br />
<p>Sài Gòn đáng yêu lắm! Nó đơn giản và khoáng đạt, không bao giờ cần cái văn vẻ \"màu mè ba lá hẹ\", không cần các suy nghĩ tự tôn ra vẻ triết gia hướng nội, để phải miệt thị quan điểm của kẻ khác.</p><br />
<p>Sài Gòn còn là thành phố của sự đối lập: giữa những biệt thự kín cổng cao tường và đám nhà lụp xụp trên kênh; giữa văn minh đô thị và những tiếng chửi thề; giữa sự ồn ào bụi bặm và không gian im lắng thanh tao. </p><br />
<p>Ẩn mình sau các hàng bông giấy, dây thủy tiên chói đỏ, là những ngôi biệt thự lúc nào cũng kín cổng. Không ai biết những người sống trong đó làm gì, là ai, và cũng chẳng ai thật sự quan tâm ...</p>
<br /><p><center>* * *</center></p>
<p>Sài Gòn không bao giờ ngủ. Khoảng 9, 10 giờ đêm là các vũ trường bắt đầu hoạt động. Bọn con nhà giàu tí tởn hẹn hò SH, LA, su 100, quần xẻ, váy cao, phóng vù vù.</p> <br />
<p>Phong trào đua xe thì Sài Gòn luôn đi đầu. Thưở chưa có nhiều xe gắn máy thì bọn choai choai đã biểu diễn đi xe đạp một bánh xoay mòng mòng hàng đêm trước nhà hát lớn. Ðến khi có xe gắn máy nhiều rồi thì cả đội \"Bồ Câu Trắng\" cũng chẳng bị ai ngán. Hơn nữa bị giam xe thì một bữa chân gà rút xương ở Hàm Nghi là lấy xe ra cái rụp.</p> <br />
<p>Khuya hơn nữa thì gái \"Ca Ve\" tràn về các quán cơm tấm, mì xe để \"đá đèn\" (ăn đêm). Bọn \"dân quậy\" bao gồm lũ nhóc mới lớn lẫn dân giang hồ thứ thiệt cũng tham gia đá đèn la hét đến 3, 4 giờ sáng.</p> <br />
<p>Cùng khi đó các em nhỏ bán vé số cũng hoạt động cật lực. May mà vớ phải dân chơi trúng quả nó mua cả cọc thì ngày mai không phải lo tiền ăn. Cựu chiến binh, thương phế binh thì vác đàn hát \"Phố Ðêm\", cay đắng xin từng đồng của lũ nhỏ mặt búng ra sữa chưa bao giờ hiểu hai chữ \"mất mát\" nghĩa là gì. </p> <br />
<p>Ðến 3, 4 giờ sáng, khi lũ dân chơi đã hoàn toàn mệt lử lũ lượt ra về, thì dân lao động bắt đầu một ngày mới. Xích lô, ba gác chở rau thịt ra chợ bán. Các lò bánh mì bắt đầu xay bột trét bơ nướng bánh thơm lừng. Mấy chị bán cà phê vỉa hè cũng bắt đầu đun nước, pha cà phê vợt cho gã xích lô mới tỉnh ngủ mắt vừa nhắm vừa mở vừa tán tỉnh.</p> <br />
<p>Mùi mồ hôi lẫn với mùi bơ, mùi men, mùi khói SU-100 dần biến, quyện với mùi không khí ẩm mát tinh sương tạo ra \"mùi Sài Gòn\" buổi sáng ở các khu phố chợ rất đặc trưng.</p>
<p><center>* * *</center></p>
<p>Nếu phải so sánh Sài Gòn với Hà Nội chẳng hạn, thì ta có thể so sánh ngay hai loại ổi của hai xứ. Ôi đào Hà Nội thơm lừng, ngọt ngay, ruột đỏ tươi rất đẹp, nhưng cùi mỏng, hột to, vừa khó nhá vừa chỉ nhắm được tí là hết. Ôi Sài Gòn to hơn nắm tay, cùi dày, không ngọt và thơm như ổi đào nhưng giòn tan, cắn một miếng là mát lịm, lại có thể chia cho nhiều người ăn, chấm muối ớt nghe qua là chảy nước miếng.</p>  <br />
<p>Con gái Sài Gòn cũng vậy, nghe qua là … chảy nước miếng.</p> <br />
<p>Con gái Sài Gòn dễ thương lắm! Họ có cái nhìn trong trẻo về cuộc sống, lại chẳng giận dai vùng vằng vô lý bao giờ . Ði đón trễ thì: \"anh để em chờ nãy giờ đó coi có được hông? Ghét dễ sợ luôn hà!\" Cộng với một cái lườm, hai cái nguýt thì bọn Tèo Sài Gòn hối hận quá cả 2 tháng sau mới ... trễ lần nữa. </p> <br />
<p>Con gái Sài Gòn rất biết ăn mặc, đi đứng. Tiền có thể thiếu chứ phong cách tiểu thư thì chẳng thiếu bao giờ. Tiểu thư Sài Gòn không ưỡn ẹo mè nheo, mà phóng xe vèo vèo đứng tim Tèo.</p> <br />
<p>Giọng gái Sài Gòn thì ngọt hơn mía lùi. Cái câu \"hổng chịu đâu\" mà nghe dân xứ khác nói thì ngứa lỗ nhĩ, nghe con gái Sài Gòn nói thì bọn Tèo Sài Gòn như bong bóng xì hơi, biểu cái gì cũng nghe ráo trọi. Con gái Sài Gòn lãng mạn chẳng kém ai, nhưng cũng rất thực tế. \"Ðược thì được hổng được thì thôi, làm chi mà dzữ dzậy!\" </p> <br />
<p>Sài Gòn là vậy đó, ít nhất là từ cái nhìn của Tèo tôi .  Còn ti tỉ nhiều đề tài thú vị về Sài Gòn mà tôi không muốn đề cập vì lười là chính: cuộc sống sinh viên học sinh Sài Gòn, các trò ma mãnh \"cua ghệ\" của bọn Tèo Sài Gòn, con trai Sài Gòn, bạn bè Sài Gòn, ...</p> <br />
<p>Riêng tôi thì tôi vẫn nhớ day dứt cái ngõ nhỏ xôn xao ấy ...</p>
<p>Tác giả: Ngô Quang Hưng</p>";
		break;
	case "mien-tay":
		$tmp_content = "{image : ' http://farm3.static.flickr.com/2833/13562034944_67cc95e456_b.jpg', title : 'những cánh đồng lúa xanh muợt thẳng cánh cò bay'},
                                {image : ' http://farm8.static.flickr.com/7260/13558663015_493bcd006b_b.jpg', title : 'vuờn Cam trĩu quả'},
                                {image : ' http://farm8.static.flickr.com/7404/13561785433_68c59cab53_b.jpg', title : 'hình ảnh chèo thuyền đặc trưng miền sông nuớc Miền tây'},
                                {image : ' http://farm8.static.flickr.com/7355/13562043304_ffa9c12045_b.jpg', title : 'cây cầu Dừa'},
                                {image : ' http://farm3.static.flickr.com/2881/13561782555_7d84d7bf3e_b.jpg', title : 'cầu Mỹ Thuận - Vĩnh Long - Tiền Giang'},
                                {image : ' http://farm3.static.flickr.com/2904/13561849963_aa23a1e2ff_b.jpg', title : 'cầu Cần Thơ'},
                                {image : ' http://farm6.static.flickr.com/5537/13562029084_75f437cbcc_b.jpg', title : 'mũi Cà Mau - cực nam của tổ quốc'},
                                {image : ' http://farm8.static.flickr.com/7451/13561794443_84d3d3823c_b.jpg', title : 'hồ Đá Bạc - Cà Mau'},
                                {image : ' http://farm4.static.flickr.com/3787/13561788625_690c5d1ca1_b.jpg', title : 'Cà Mau'},
                                {image : ' http://farm8.static.flickr.com/7403/13561855513_1ff286d6ed_b.jpg', title : 'Bến Tre'},
                                {image : ' http://farm8.static.flickr.com/7353/13562037764_a674273aca_b.jpg', title : 'hàng dừa Bến Tre'},
                                {image : ' http://farm4.static.flickr.com/3671/13561686395_e47b5f9b34_b.jpg', title : 'Dừa - Đặc sản tỉnh Bến Tre'},
                                {image : ' http://farm8.static.flickr.com/7425/13562100844_81eda27740_b.jpg', title : 'Tháp Muời đẹp nhất bông sen'},
                                {image : ' http://farm8.static.flickr.com/7428/13561752385_f425801ec0_b.jpg', title : 'một góc chợ nổi'},
                                {image : ' http://farm3.static.flickr.com/2907/13562125764_2ea5f91a66_b.jpg', title : 'chợ nổi miền tây'},
                                {image : ' http://farm4.static.flickr.com/3806/13561820733_0a1e61776d_b.jpg', title : 'hội đua ghe ngo của đồng bào Khmer'},
                                {image : ' http://farm8.static.flickr.com/7219/13561823623_db1310be84_b.jpg', title : 'chùa Dơi - tỉnh Sóc Trăng'},
                                {image : ' http://farm8.static.flickr.com/7057/13562045664_779d7159f7_b.jpg', title : 'đàn cò trong tiếng ru của ngưòi mẹ'},
                                {image : 'http://farm8.static.flickr.com/7391/13562027604_057390ff74_b.jpg', title : 'đàn sếu đầu đỏ'},
                                {image : ' http://farm6.static.flickr.com/5254/13559005934_76eff1169e_b.jpg', title : 'cảnh đánh bắt cá của nguời dân'}
                                ";
$share_image="https://c2.staticflickr.com/8/7353/13562037764_a674273aca.jpg";             
                $info_title="Có những chiều sông nước miền Tây";
                $info_content="<p>Những ai đang buồn chuyện riêng tư, nhất là tình cảm, đừng bao giờ một mình ngắm miền Tây vào chiều muộn. Chắc chắn, bạn sẽ bị cả không gian sông nước tĩnh lặng trong một buổi chiều tà “đánh cắp” nốt đôi chút vui còn sót lại.</p> <br />
<p>Bởi khi ấy, cái buồn cứ lặng lẽ, miên man thấm vào tâm trí và xúc cảm của bạn. Nó nhẩn nha len lỏi từng ngõ ngách, nó nhuốm cái bàng bạc của bóng chiều đang tỏa dần trên từng kênh rạch, thu vào tầm nhìn, vào ánh mắt bạn. Nó làm bạn như quên đi hết thảy những điều quanh mình, chỉ đau đáu chú tâm vào nỗi buồn đang day dứt, đang gặm nhấm “không thương xót” lòng bạn.</p> <br />
<p>Nói thì nói vậy, nhưng chiều nay, một mình tôi với một nỗi buồn lại rủ nhau đi xuống miền Tây. Đôi khi, để khuây khỏa một nỗi buồn, người ta thật dễ dàng sa vào một nỗi buồn khác, và thường là tệ hơn bản thân cái cớ ban đầu xô đẩy người ta. Tôi cũng vậy, chiều nay, một mình cùng sông nước miền Tây.</p> <br />
<p>Giờ thì tôi hiểu vì sao miền Tây lại là xứ sản sinh ra vọng cổ, cải lương. Và tôi cũng đã hiểu vì sao người ta lại viết “chiều chiều ra đứng ngõ sau/ Trông về quê mẹ ruột đau chín chiều”. Miền Tây trong những buổi chiều thường gợi nỗi buồn tha thiết không chỉ với những kẻ tha hương, mà cả những ai đang nặng lòng vì thực tại. Vẻ mênh mang của những bãi bờ êm đềm sông nước, với màu xanh miên man, bất tận của đồng bãi, lại thêm những căn nhà nổi, những con đò hững hờ buông neo trên các kênh rạch nhỏ, vẻ trầm lắng, u tịch ấy hỏi sao không khiến lòng người nôn nao? Và khi ấy, người ta bỗng quên đi những chộn rộn vừa trải qua, và dù muốn hay không, lòng người bỗng tự thấy muốn chùng xuống theo cái dáng cầm chèo thư thả của một bóng người mảnh mai dìu dặt trên dòng sông vắng.</p> <br />
<p>Miền Tây đẹp, tĩnh lặng mà buồn. Một nỗi buồn còn thuần phác như chưa bị lấm láp quá nhiều những phiền muộn của thời công nghiệp hóa. Càng xa thành phố, càng thấm thía cái buồn tha thiết mà lành mạnh đó. Những ngôi nhà nho nhỏ, những khoảnh vườn cây trái như ôm ấp một kỷ niệm chưa xa về vùng đất mới. Trải nghiệm về một vùng đất thực ra là trải nghiệm của chính lòng mình ở một không gian cảm xúc được gợi nên từ muôn hình sắc, hương vị của nơi đây.</p> <br />
<p>Chiều nay dù buồn, tôi vẫn muốn tới miền Tây, để thấy trong lòng mình đang cất giữ một nỗi buồn chưa qua, để thấy cuộc sống luôn có những lúc buộc phải trải qua, phải thấm thía, phải đủ dũng cảm để đi cùng nỗi buồn đó.</p> <br />
<p>Chuyện đời, dù buồn dù vui, sau một thời gian đủ dài, đều trở thành kỷ niệm, thành một phần tạo nên mảng hồi ức phong phú của một đời người. Và khi nỗi buồn đã chỉ còn nằm trong câu chuyện kể lại, tôi lại tự hỏi mình rằng, có phải miền Tây buồn, hay chỉ vì khi ấy, lòng mình buồn mà đã vô lý nghĩ ra như thế?</p> <br />
<p>Tác giả: Đỗ Dương</p>";

                break;
	case "chau-au":
		$tmp_content = "{image : 'http://farm8.static.flickr.com/7366/13781190163_876969b228_b.jpg', title : 'Venice-Italy'},
                                {image : 'http://farm8.static.flickr.com/7393/13781232115_a3810c82a9_b.jpg', title : 'Vatican City'},
                                {image : 'http://farm8.static.flickr.com/7298/13781525684_677855e2bd_b.jpg', title : 'Cầu tháp - England'},
                                {image : 'http://farm3.static.flickr.com/2853/13781195263_2b7fff9b6b_b.jpg', title : 'Stonehenge-England'},
                                {image : 'http://farm4.static.flickr.com/3697/13781532454_a0cdef114e_b.jpg', title : 'Lâu dài nổi tiếng Schloss-Heidelberg - Đức'},
                                {image : 'https://farm8.staticflickr.com/7036/13781765454_643852b5c7_b.jpg', title : 'Ngôi làng Manarola-Italia'},
                                {image : 'http://farm3.static.flickr.com/2902/13781538444_912e99c40f_b.jpg', title : 'Tháp Eiffel'},
                                {image : 'http://farm4.static.flickr.com/3778/13781254513_359040e943_b.jpg', title : 'Thành Rome'},
                                {image : 'http://farm8.static.flickr.com/7089/13781546084_a5cc7e3532_b.jpg', title : 'Tháp đồng hồ Big Ben'}
				";
$share_image="https://c1.staticflickr.com/3/2902/13781538444_912e99c40f.jpg";  
                $info_title="Dưới nắng trời Châu Âu";
                $info_content="Đó là vẻ đẹp Copenhage -  thiên đường của những giấc mơ, là những khoảnh khắc yên bình nơi thành phố Berlin, là Sevilla những ngày rực nắng, là vẻ đẹp của Thụy Điển qua sự hoành tráng của Malmö, hay đơn giản chỉ là một ngày nắng đẹp ở London, những khu vườn nhỏ xinh giữa lòng kinh thành Paris tráng lệ… ";
		break;
	case "dong-que":
		$tmp_content = "{image : ' http://farm6.static.flickr.com/5522/13563113245_545d09fe10_b.jpg', title : 'chú mục đồng thổi sáo - đậm chất miền quê xưa'},
                                {image : 'http://farm3.static.flickr.com/2873/13563653094_5411aa2f8f_b.jpg', title : 'những đứa trẻ quê vui đùa cùng nhau'},
                                {image : ' http://farm8.static.flickr.com/7154/13563160763_dff84f5eb1_b.jpg', title : 'Nụ cười hồn nhiên của đứa trẻ vùng cao'},
                                {image : ' http://farm8.static.flickr.com/7123/13563163853_c99166170f_b.jpg', title : 'Tục tắm tiền của người Tây Bắc'},
                                {image : ' http://farm8.static.flickr.com/7187/13563476334_02ef10ef30_b.jpg', title : ''},
                                {image : ' http://farm4.static.flickr.com/3734/13563191303_4d24a222e8_b.jpg', title : 'trang phục phụ nữ vùng cao'},
                                {image : ' http://farm8.static.flickr.com/7380/13563458124_8d6c6d0837_b.jpg', title : 'Dù cuộc sống có khắc nghiệt nhưng nụ cuời của em vẫn sáng'},
                                {image : ' http://farm3.static.flickr.com/2852/13563202473_8f0072b6e3_b.jpg', title : 'đầm Sen - quốc hoa của Việt Nam'},
                                {image : ' http://farm8.static.flickr.com/7418/13563101375_05f3fe140d_b.jpg', title : 'hình ảnh nguời nông dân cấy mạ - đặc trưng của miền quê Việt Nam'},
                                {image : ' http://farm4.static.flickr.com/3693/13563103255_01c3b3f2cb_b.jpg', title : 'cổng làng'},
                                {image : ' http://farm4.static.flickr.com/3754/13563217463_bdf231c619_b.jpg', title : 'đồng cỏ xanh ngắt'},
                                {image : ' http://farm3.static.flickr.com/2887/13563469914_3b383b5a0f_b.jpg', title : 'con nít miền quê'},
                                {image : ' http://farm3.static.flickr.com/2881/13563181203_b4ae9885a3_b.jpg', title : ''},
                                {image : ' http://farm3.static.flickr.com/2887/13563181563_4d8b4b6678_b.jpg', title : 'nụ cuời hồn nhiên của lũ trẻ'},
                                {image : ' http://farm8.static.flickr.com/7122/13563162625_e16816c65a_b.jpg', title : 'bến nuớc'},
                                {image : 'http://farm8.static.flickr.com/7036/13777706523_7f0a1233d9_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7202/13777706363_62c32af25f_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7199/13777706813_e7e29fee55_b.jpg', title : ''},
                                {image : ' http://farm4.static.flickr.com/3757/13777706973_fc3ba673e3_b.jpg', title : ''},
                                {image : ' http://farm4.static.flickr.com/3670/13777703245_c8526cce98_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7176/13778055714_ccb4e4949d_b.jpg', title : ''}
                                ";
$share_image="https://farm8.staticflickr.com/7154/13563160763_dff84f5eb1_n.jpg";
                $info_title="Miền quê, tuổi thơ tôi";
                $info_content="<p>Tôi  lại trở về một miền quê </p>
<p>Nhớ biết bao những ngày xưa ấy.</p>
<p>Kỷ niệm xôn xao như là sóng dậy,</p>
<p>Ngẩn ngơ lòng về Một Miền Quê...</p><br />
<p>&nbsp;&nbsp;&nbsp;&nbsp;Miền quê! Tuổi thơ tôi!</p>
           	<p>&nbsp;&nbsp;&nbsp;&nbsp;Có người dân sống bao tình nghĩa.</p>
           	<p>&nbsp;&nbsp;&nbsp;&nbsp;Tấm lòng thành như bãi dâu, ruộng mía</p>
           	<p>&nbsp;&nbsp;&nbsp;&nbsp;Như cánh đồng ngô, lúa, đậu, vừng.</p><br />

<p>Điệu dô hò, dô huậy mến thương,</p>
<p>Câu ca vít cong con sào đò ngược.</p>
<p>Đêm kéo mật xóm làng vui không sao ngủ được.</p>
<p>Năm tháng ngọt ngào, dù cơm độn, ngô bung.</p><br />

           	<p>&nbsp;&nbsp;&nbsp;&nbsp;Dậy trong lòng bao nỗi nhớ nhung,</p>
           	<p>&nbsp;&nbsp;&nbsp;&nbsp;Lũ bạn chăn bò nô đùa trên bãi,</p>
           	<p>&nbsp;&nbsp;&nbsp;&nbsp;Tiếng sáo diều, cánh đồng chiều gặt hái.</p>
           	<p>&nbsp;&nbsp;&nbsp;&nbsp;Ơi! Tuổi thơ ơi!</p>
           	<p>&nbsp;&nbsp;&nbsp;&nbsp;Bao kỷ niệm vẫn rất gần.</p><br />

<p>Như những con sông nước vẫn xuôi dòng, </p>
<p>Mang hồn quê hương chúng tôi khôn lớn.</p>
<p>Dẫu sống nơi đâu, dẫu đời xế muộn</p>
<p>Tình nghĩa quê hương, muốn lại trở về.</p><br />
<p>Tác giả: Nguyễn Anh Trí</p>";
		break;
	case "doraemon-nobita":
		$tmp_content = "{image : 'http://farm4.static.flickr.com/3732/13781767555_df59e8d9fd_b.jpg', title : ''},
                                {image : ' http://farm4.static.flickr.com/3673/13781767795_5c90a1a7e1_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7345/13782102024_1defdb92ff_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7116/13781771915_27e2efe66b_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7208/13781780773_48d99e3f92_b.jpg', title : ''},
                                {image : ' http://farm4.static.flickr.com/3773/13781776835_6be7f38c26_b.jpg', title : ''},
                                {image : ' http://farm6.static.flickr.com/5133/13782110274_c2dc728663_b.jpg', title : ''},
                                {image : ' http://farm4.static.flickr.com/3671/13781780165_13c12d42d1_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7172/13781780015_562004f95a_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7180/13781780485_83f5f4497d_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7088/13781781495_81d0a85f27_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7013/13781782855_f98e8edcae_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7187/13781788073_a84001117b_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7460/13781783665_68380db966_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7181/13781785405_06f42e230b_b.jpg', title : ''}
				";
$share_image="https://farm8.staticflickr.com/7460/13781783665_68380db966_n.jpg";
                $info_title="Tình bạn “xuyên thời gian” của Nobita và Doraemon";
                $info_content="<p>Một tình bạn đẹp đâu cần phải có quá nhiều thứ để người ta mong chờ, đó là khi người ta đến bên nhau không toan tính, không vụ lợi và có thể tin tưởng nhau suốt cuộc đời này, giống như Nobita và Doraemon vậy.</p> <br />
<p>Có lẽ không chỉ là ngày xưa, cái thời bé tí tẹo khi hai đứa chụm đầu vào nhau cùng đọc chung một quyển truyện tranh Doraemon mà cho đên bây giờ ai trong chúng ta cũng ước rằng mình có một người bạn như chú mèo máy Doraemon, có túi bảo bối thần kì có thể giúp ta vượt qua mọi khó khăn. </p> <br />
<p>Nhưng có phải tình bạn của Doraemon và Nobita gắn bó nhau chỉ vì “chiếc túi thần kì” không? Có phải Nobita rất may mắn khi có một người bạn như chú mèo máy thông minh Doraemon không?</p> <br />
<p>Chẳng phải vì Doraemon có nhiều bảo bối chứa trong chiếc túi thần kì với những công dụng mà ai cũng mơ được sở hữu…</p> <br />
<p>Chẳng phải vì Doraemon có thể đi tới tương lai, có thể biết được những chuyện gì sẽ xảy ra và cũng có thể quay ngược về quá khứ nhờ cỗ máy thời gian giấu trong ngăn bàn…</p> <br />
<p>Chẳng phải vì Doraemon có chong chóng tre, có thể khiến bạn bay lượn thỏa thích trên bầu trời. Mà vì…</p> <br />
<p>Doraemon luôn sát cánh với Nobita, luôn ở bên cậu bạn của mình vào những lúc khó khăn nhất…</p> <br />
<p>Luôn an ủi, khích lệ, động viên và mong muốn những điều tốt nhất đến với Nobita…</p> <br />
<p>Luôn khuyên răn Nobita phải làm theo những điều đúng đắn nhất…</p> <br />
<p>Luôn giúp Nobita đối phó khi bị Chaien “lồi rốn” và Xeko “mỏ nhọn” bắt nạt…</p> <br />
<p>Luôn tìm mọi cách để Nobia có thể chiếm được cảm tình của cô bạn đáng yêu Xuka…</p> <br />
<p>Và mình thì không nghĩ rằng chỉ mình Nobita may mắn khi gặp Doreamon, mà cả Doreamon cũng may mắn không kém khi được làm bạn với Nobita.</p> <br />
<p>Là người Nobita nghĩ đến đầu tiên để chia sẻ về mọi niềm vui, nỗi buồn hay khúc mắc trong cuộc sống…</p> <br />
<p>Là người bạn đồng hành trong suốt mọi cuộc hành trình của Nobita, dù là ở tương lai hay ngược về những ngày quá khứ…</p> <br />
<p>Là người luôn được Nobita chăm sóc, quan tâm và bảo vệ dù cậu ta vô cùng hậu đậu, yếu ớt và không tự lo được cho bản thân…</p> <br />
<p>Là người được Nobita nhớ đến nhiều nhất mỗi khi vắng mặt…</p> <br />
<p>Là người chứng kiến và góp phần vào sự lớn lên của Nobita…</p> <br />
<p>Và nếu các bạn đọc tập truyện “Tạm biệt Doraemon”, khi Doraemon nói lời chia tay Nobita vĩnh viễn và trở lại tương lai. Nhất là cảnh Nobita một mình quyết tử với Chaien mà không cho Doraemon biết, chỉ để chứng minh cho bạn rằng mình đã mạnh mẽ “Từ nay Chaien sẽ không dám bắt nạt tớ nữa đâu”, để Doraemon yên lòng ra đi. 
Một cậu bé yếu đuối, vụng về, hậu đậu cả một đời như Nôbita, chỉ dám trốn chạy, giờ thà chết chiến đầu với Chaien để làm vui lòng Doraemon.</p> <br />
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cho dù, có những khi….</p> <br />
<p>Chú mèo máy thèm ăn bánh rán đến nỗi chấp nhận làm theo những mong muốn “ngốc nghếch” của Nobita…</p> <br />
<p>Không cẩn thận để những bảo bối rơi vào tay cậu bạn cùng phòng hay “táy máy”…</p> <br />
<p>Giúp Nobita đối phó với cả bố mẹ và thầy giáo, dù biết thế là không hay một chút nào…</p> <br />
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Và…</p> <br />
<p>Nobita vì tò mò mà không nghe theo lời dặn dò của Doraemon rồi gây nên những hậu quả “khó đỡ”, đến nỗi cả hai phải tá hỏa để “sửa chữa” những sai lầm…</p> <br />
<p>Ham chơi, chỉ nghĩ đến bản thân khi đưa ra những yêu cầu buộc Doraemon phải thực hiện…</p> <br />
<p>Dựa dẫm vào Doraemon quá nhiều…</p> <br />
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nhưng…</p> <br />
<p>Doraemon vẫn được xem như là người trong gia đình của Nobita, được yêu thương, được chăm sóc cẩn thận… Cả hai không chỉ xem nhau như một người bạn, mà còn như những người anh em tốt của nhau.</p> <br />
<p>Doraemon vẫn là người bạn tốt nhất của Nobita, là người Nobita quý và trân trọng nhất…</p> <br />
<p>Doraemon vẫn là chú mèo máy tốt bụng đáng yêu của Xuka, Chaien, Xeko… dù không ít lần gây gổ đánh nhau… Mọi người luôn có những giây phút vui vẻ và ý nghĩa khi được ở cạnh nhau như thế. Cả hai đã có một tình bạn mà bất cứ ai cũng phải mơ ước.</p> <br />
<p>Một người bạn tốt không phải là một người hoàn hảo, cũng không phải là người xuất sắc và toàn diện về mọi thứ mà sẽ là một người luôn hết lòng vì ta, luôn sẵn sàng ở bên ta dù khó khăn hay hạnh phúc… </p> <br />
<p>Luôn dành cho ta một vị trí trong tim để quan tâm, để yêu thương, để chăm sóc…</p> <br />
<p>Một người bạn tốt không phải là người luôn dung túng cho mọi lỗi lầm của ta mà luôn góp ý để ta sửa chữa, cố gắng và hoàn thiện bản thân một cách tốt nhất…</p> <br />
<p>Một người bạn tốt không phải là người ích kỉ, chỉ nghĩ cho bản thân, mà luôn tôn trọng ta, hiểu ta và tìm mọi cách làm cho ta những điều tốt đẹp nhất…</p> <br />
<p>Luôn lắng nghe hết những buồn vui, những lo lắng, những muộn phiền của ta mà không hề than vãn…</p> <br />
<p>Luôn đặt sự quan trọng của tình bạn lên bất cứ một thứ vật chất hay tiền bạc nào…</p> <br />
<p>Vậy đấy, một tình bạn đẹp đâu cần phải có quá nhiều thứ để người ta mong chờ, một tình bạn đẹp là khi người ta đến bên nhau không toan tính không vụ lợi và có niềm tin để tin tưởng nhau suốt cuộc đời này!
<p>Tác giả: Lạc Hi</p>";
		break;
	case "doi-nui":
		$tmp_content = 	"{image : 'http://farm8.static.flickr.com/7088/13657802745_55267e023f_b.jpg', title : 'KAWAGUCHIKO – Một trong “Phú Sĩ Ngũ Hồ”'},
                                {image : 'http://farm8.static.flickr.com/7074/13658138984_0b22430436_b.jpg', title : 'Núi đôi Quản Bạ - Hà Giang '},
                                {image : 'http://farm8.static.flickr.com/7226/13657804183_a9501d959a_b.jpg', title : 'Ngút ngàn núi đồi Sơn La'},
                                {image : 'http://farm4.static.flickr.com/3781/13657822093_b57e494797_b.jpg', title : 'Nước Cộng hòa Altai hẻo lánh thuộc Nga từ lâu đã được ví như vùng Tây Tạng của Nga'},
                                {image : 'http://farm3.static.flickr.com/2926/13658124624_c932d16648_b.jpg', title : 'Du lịch Sơn La – Mộc Châu '},
                                {image : 'http://farm8.static.flickr.com/7307/13658155434_8e41f7054c_b.jpg', title : 'Vùng núi Sanetsch - Thụy Sĩ'},
                                {image : 'http://farm4.static.flickr.com/3799/13658101444_6708d14ffa_b.jpg', title : 'Thung lũng Bắc Sơn bừng sáng giữa xứ Lạng '},
                                {image : 'http://farm8.static.flickr.com/7354/13657806813_16635896d7_b.jpg', title : 'Khung cảnh núi non lúc chập tối, thơ mộng và ấm áp'},
                                {image : 'http://farm8.static.flickr.com/7311/13657804075_6e356dda2a_b.jpg', title : 'Hoàng hôn ấp áp trên ngọn núi Phú Sĩ - Nhật Bản'},
                                {image : 'http://farm3.static.flickr.com/2889/13657813725_d2f32d7492_b.jpg', title : 'Núi băng lạnh giá và kì vĩ'},
                                {image : 'http://farm4.static.flickr.com/3797/13657830873_4119e0c74c_b.jpg', title : 'Đồi núi xanh tươi mênh mông đầy sức sống'},
                                {image : 'http://farm8.static.flickr.com/7193/13657815685_5e0aa4a20c_b.jpg', title : 'Moonlight in the mountain'},
                                {image : 'http://farm8.static.flickr.com/7308/13657800235_bfa4f19e33_b.jpg', title : 'Hồ băng - lạnh và rộng'},
                                {image : 'http://farm4.static.flickr.com/3791/13658137804_d4b35a78e8_b.jpg', title : 'Một không gian màu thu'},
                                {image : 'http://farm8.static.flickr.com/7194/13658141134_1092688046_b.jpg', title : 'Một không gian rộng'},
                                {image : 'http://farm3.static.flickr.com/2920/13657781235_9511605565_b.jpg', title : 'Top of the world'},
                                {image : 'http://farm8.static.flickr.com/7160/13658122574_c432c9bbca_b.jpg', title : 'Con người giữa những tảng đá gồ ghề'},
                                {image : 'http://farm8.static.flickr.com/7004/13657755375_74545f7582_b.jpg', title : 'Valle del Frances '},
                                {image : 'http://farm4.static.flickr.com/3797/13657830873_4119e0c74c_b.jpg', title : 'Phan-xi-phan, nóc nhà của Đông Dương'}							
                                ";
$share_image="https://farm8.staticflickr.com/7004/13657755375_74545f7582_n.jpg";
		break;
	case "thoi-tho-au":
		$tmp_content = "{image : ' http://farm3.static.flickr.com/2884/13563370463_cbc73c8345_b.jpg', title : 'Nô đùa với lũ bạn trong nuớc'},
                                {image : ' http://farm4.static.flickr.com/3743/13563349803_dcc228e899_b.jpg', title : 'thời còn cởi truồng tắm mưa'},
                                {image : ' http://farm8.static.flickr.com/7314/13563350123_6c2b949d8a_b.jpg', title : 'đồng hồ dừa'},
                                {image : ' http://farm8.static.flickr.com/7100/13563306475_d4ec753f3c_b.jpg', title : 'thời bẻ khoai trộm sắn ^_^'},
                                {image : ' http://farm4.static.flickr.com/3823/13563351173_e1f0370fbf_b.jpg', title : 'cùng lũ bạn thân cắp sách đến trường'},
                                {image : ' http://farm4.static.flickr.com/3826/13563351793_64ca3e0b09_b.jpg', title : ''},
                                {image : ' http://farm4.static.flickr.com/3712/13563379443_3f605714cc_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7443/13563671954_85b31cb918_b.jpg', title : ''},
                                {image : ' http://farm4.static.flickr.com/3704/13563385983_458eb79cb8_b.jpg', title : ''},
                                {image : ' http://farm4.static.flickr.com/3706/13563354503_010b6f35ac_b.jpg', title : 'thời ăn trộm mít nhà bà Tám'},
                                {image : ' http://farm4.static.flickr.com/3792/13563387663_4572e3fe67_b.jpg', title : 'Ầu ơ...mẹ ru con ngủ...Năm canh dài...thức đủ năm canh'},
                                {image : ' http://farm4.static.flickr.com/3831/13563646654_8c97572508_b.jpg', title : ''},
                                {image : ' http://farm6.static.flickr.com/5011/13563691254_1b9da30eac_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7061/13563692954_83b9c094b1_b.jpg', title : 'bắn bi'},
                                {image : ' http://farm3.static.flickr.com/2936/13563361073_ee47b950af_b.jpg', title : 'tình yêu tuổi con nít'},
                                {image : ' http://farm4.static.flickr.com/3720/13563342575_eecef4688c_b.jpg', title : 'những buổi chiều thả diều'},
                                {image : ' http://farm3.static.flickr.com/2918/13563290895_cd4d678f55_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7062/13563414533_1129512753_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7049/13563417873_67f6af2b13_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7115/13563481153_ff3ce275ea_b.jpg', title : 'những buổi đạp xe đến trường'},
                                {image : ' http://farm3.static.flickr.com/2891/13563650604_0efb813608_b.jpg', title : ''},
                                {image : ' http://farm8.static.flickr.com/7354/13563291935_83cb46e057_b.jpg', title : ''},
                                {image : ' http://farm4.static.flickr.com/3752/13563496603_92372f4cc3_b.jpg', title : ''},
                                {image : ' http://farm3.static.flickr.com/2838/13563293215_6981b4295e_b.jpg', title : 'những buổi trưa hè chơi Ô ăn quan cùng lũ bạn'},
                                {image : ' http://farm3.static.flickr.com/2873/13563653094_5411aa2f8f_b.jpg', title : 'cùng lớn lên với đám nhóc cùng xóm'}";
$share_image="https://farm3.staticflickr.com/2884/13563370463_cbc73c8345_n.jpg";
                $info_title="Một ngày để nhớ về tuổi thơ!";
                $info_content="<p>Có lẽ, món quà tuyệt vời nhất của cuộc sống này mỗi khi mệt mỏi chính là đi tìm những đoạn hồi ức của tuổi thơ.</p> <br />
<p>Tôi nhớ về tuổi thơ tôi, là những lần đuổi theo chiếc xe đạp rao kẹo kéo đến hụt cả hơi, chầm chậm ăn từng chút một để cố kéo dài ra hương vị của nó. Là những món đồ chơi túm năm tụm ba hái lá cây xào nấu, là những gói ô mai dây dài ngoằng giấu kỹ vụng trộm vì sợ bị mắng, là những ngày tháng tích cóp tiền ăn sáng chỉ để mua một cuốn truyện tranh,  là đôi ba lần đùa nghịch chạy nhảy mà ngã đến gãy chân.</p> <br />
<p>Tôi nhớ về tuổi thơ tôi, là những tháng ngày ngập tràn nắng vàng, là tiếng hát đồng dao cất lên trong những buổi sinh hoạt hè, là những lần đầu tiên biết nói dối để đi chơi, là quá trình tự lớn lên giữa đất trời dài rộng, và mang theo trong mình những ao ước bước vào cuộc đời.</p> <br />
<p>Tôi nhớ về tuổi thơ tôi, là những lần đón hướng gió để giơ cao chong chóng, là những lần chơi đuổi bắt trốn tìm để rồi bị lạc giữa phố phường tấp nập không tìm thấy đường về, là những lần tập xe đạp loạng choạng ngã chảy máu cùng với tiếng khóc nấc đáng thương.</p> <br />
<p>Tôi nhớ về tuổi thơ tôi, là những tháng ngày vui vẻ biết bao nhiêu, khi vật chất cái gì cũng thiếu thốn, khi ngay cả chiếc kẹo cũng có thể cùng bạn bè cắn đôi chia nửa, khi chỉ cần có vài trăm đồng ăn vặt cũng sướng âm ỉ như có cả thế giới, khi quà tặng tết thiếu nhi cũng chỉ là đôi ba cái kẹo và một cuốn vở tập viết nhưng vẫn cứ háo hức, mong chờ.</p> <br />
<p>Tôi nhớ về tuổi thơ tôi, là quãng thời gian đã từng vô lo vô nghĩ, có thể sống an nhiên giữa vòng bao bọc của mọi người, chứ chẳng phải mệt mỏi và gánh gồng nhiều thứ trách nhiệm  khi tự đứng trên đôi chân của mình như bây giờ.</p> <br />
<p>Và tuổi thơ của ai cũng vậy, đều có những tháng ngày không vết nứt, mà quá trình lớn lên có tiếng khóc râm ran, có tiếng cười rả rích, có cả những buồn tủi của thời trẻ dại, có những vết thương ngoài da hòa lẫn với máu và nước mắt. Nhưng, hồi tưởng lại tất cả, vẫn thấy vui cứ là vui.</p> <br />
<p>Thời gian vẫn cứ trôi đi mãi và dần dần mang theo toàn bộ tuổi trẻ của ta đi hết, cả những ký ức tuổi thơ cũng sẽ trở thành một khoảng lặng và bị mài giũa bởi vạn sự trên đời mà mỗi khi nhớ lại ta cảm thấy như đuợc tìm về với bến đỗ bình yên.</p> <br />
<p>Tuổi thơ của bạn là gì? Đã từng là quãng thời gian lớn lên như thế nào? Bạn còn nhớ chứ? 
<p>Tác giả: chưa rõ</p>";
		break;
	
	case "20-toi-lam-gi":
		$tmp_content = "{image : 'http://farm4.static.flickr.com/3695/13715940015_0c52837844_b.jpg', title : 'Đi nhiều hơn'},
                                {image : 'https://farm4.staticflickr.com/3813/13780756655_a0107517de_b.jpg', title : 'Nếu bạn sống nội tâm, hãy đi nhiều hơn và tiếp xúc với mọi người nhiều hơn. Nếu bạn sống hướng ngoại, hãy ở một mình nhiều hơn, chiêm nghiệm nhiều hơn'},
                                {image : 'http://farm4.static.flickr.com/3753/13716327354_4145709747_b.jpg', title : 'Khi có ai đó làm điều tốt cho bạn, hãy cảm ơn'},
                                {image : 'http://farm8.static.flickr.com/7260/13715939995_4e1d32e070_b.jpg', title : 'Hãy nói với những người bạn yêu thương rằng bạn yêu họ. Họ sẽ không ở bên cạnh bạn mãi đâu'},
                                {image : 'http://farm4.static.flickr.com/3794/13716321714_0a811ec588_b.jpg', title : 'Chinh phục một sự sợ hãi, sau đó chinh phục những nỗi sợ hãi khác. Cuộc sống là để được sống, không phải để sợ hãi'},
                                {image : 'http://farm8.static.flickr.com/7155/13715960053_6d66dd09d9_b.jpg', title : ''},
                                {image : 'https://farm8.staticflickr.com/7173/13780877923_6a25984f33_b.jpg', title : 'Học cách chấp nhận những thứ mà bạn không thể thay đổi'},
                                {image : 'https://farm4.staticflickr.com/3832/13781132663_16ffc8efd8_b.jpg', title : 'Tìm sự can đảm để thay đổi những thứ mà bạn có thể thay đổi'},
                                {image : 'http://farm8.static.flickr.com/7154/13715966353_83ca7ef3b2_b.jpg', title : 'Tìm ra đam mê và hãy theo đuổi nó'},
                                {image : 'http://farm8.static.flickr.com/7271/13715947735_48274616b2_b.jpg', title : 'Hãy học từ những sai lầm'},
                                {image : 'https://farm8.staticflickr.com/7383/13781464154_fe6e725626_b.jpg', title : 'Hãy để mình yêu. Hãy bắt chuyện với anh chàng hoặc cô nàng mà bạn đã để mắt từ lâu mà chưa dám tiếp cận'},
                                {image : 'http://farm8.static.flickr.com/7325/13716323214_4f424ac456_b.jpg', title : 'Nếu bạn ghét công việc hiện tại, hãy xin nghỉ việc. Đừng chịu đựng thêm một năm nữa'},
                                {image : 'http://farm4.static.flickr.com/3668/13716330334_63c58e472c_b.jpg', title : 'Vẫy tay và mỉm cười với người lạ. Bạn có thể cứu cuộc đời họ'},
                                {image : 'http://farm3.static.flickr.com/2862/13715963143_6d43b033c9_b.jpg', title : 'Giữ lời hứa và đừng hứa nếu bạn không thể giữ lời'},
                                {image : 'http://farm8.static.flickr.com/7180/13716325644_77cbd74415_b.jpg', title : 'Bắt đầu tiết kiệm tiền cho những ngày tháng khó khăn'},
                                {image : 'http://farm4.static.flickr.com/3704/13715970253_04e81869bd_b.jpg', title : 'Đừng trì hoãn. Nếu bạn cần làm điều gì đó thì hãy làm ngay bây giờ'}
				";
$share_image="https://c2.staticflickr.com/4/3695/13715940015_0c52837844.jpg";
                $info_title="Tuổi 20 dạy chúng ta những gì?";
                $info_content="<p>Chúng ta vẫn đang sống, và trải qua quãng thời gian của tuổi 20 như thế, dẫu cho mỗi người một khác nhau, nhưng đều có chung những nỗi buồn, và sau những bài học, buộc phải đứng lên và thay đổi...</p><br />
<p>Những lần trải qua sóng gió, những mối lo lắng về tương lai sẽ phải đối mặt, những trống rỗng và hụt hẫng khi nhận ra rồi từ đây phải đơn độc đối diện với cuộc sống, những tan vỡ rồi chia ly, hiện tại bỗng chốc biến thành hoài niệm, những nuối tiếc về quãng thời gian đã từng chối chết muốn qua thật mau. Rồi một ngày nào đó tất cả mọi thứ tồi tệ ùa đến cùng một lúc, bất chợt cảm thấy cô độc và lẻ loi biết nhường nào.</p><br />
<p>Chúng ta vẫn đang sống, và trải qua quãng thời gian của tuổi 20 như thế, dẫu cho mỗi người một khác nhau, nhưng đều có chung những nỗi buồn, và sau những bài học, buộc phải đứng lên và thay đổi.</p><br />
<p>Tuổi 20, là những lần chới với trước những sự chọn lựa, mơ hồ vô định trước mọi ngã tư đường. Những trách nhiệm sẽ phải gánh thêm, những phiền não từ đó mà lớn dần. Tuổi 20 dạy chúng ta rằng, chúng ta không thể mãi là những đứa trẻ.</p><br />
<p>Tuổi 20, khi mới bắt đầu mà đã phải đối diện với quá nhiều sự thật khốc liệt, có thể hôm nay đột nhiên gặp phải thử thách này, ngày mai lại tiếp tục chiến đấu với những éo le khác. Khi ấy, tuổi 20 dạy chúng ta rằng, cuộc sống luôn không phải lúc nào cũng suôn sẻ theo ý muốn của chúng ta. Khi đã không thể thay đổi hoàn cảnh, thì sẽ chỉ còn cách chấp nhận, bất kể có thất vọng, hay bất mãn. Rồi thời gian trôi, tất cả sẽ chỉ là những chuyện đã qua, có khốc liệt đến mấy, cũng đã bị năm tháng bào mòn.</p><br />
<p>Tuổi 20, những người bạn xung quanh chúng ta bắt đầu vì những lý do gì đó mà xa dần, dù làm bất cứ chuyện gì cũng đều phải đứng độc lập. Để rồi chúng ta học cách một mình đối diện với tất cả mọi vấn đề, không dựa dẫm. Dẫu cho khoảng trống xung quanh khiến chúng ta cảm thấy hụt hẫng, nhưng buộc chúng ta phải coi như một thói quen.</p><br />
<p>Tuổi 20, phải gặp gỡ với rất nhiều những người xa lạ, phải bắt đầu những việc khó khăn nhất, và làm bất cứ việc gì một cách chăm chỉ nhất. Tuổi 20 mà nghĩ đến tương lai có quá nửa phần là sợ hãi, phần còn lại là hoang mang, bất an, lo lắng rồi mới đến hy vọng. Những lúc muốn khóc, lại sợ trở nên quá yếu mềm, đi bất định trên đường thì thấy dòng người trôi quá nhanh. Để rồi băn khoăn về những gì đã qua, nghĩ về những quyết định sai lầm.</p><br />
<p>Tuổi 20, học cách nuốt nhọc nhằn vào trong, để chỉ thở ra nụ cười, học cách chịu đựng cô đơn bằng những suy nghĩ cứng cỏi, học cách bước qua mọi thứ mà không than vãn hay ấm ức, kêu ca.</p><br />
<p>Nếu nói tuổi trẻ là lúc con người ta cảm thấy vui vẻ và hào hứng sống nhất, cũng đúng, nhưng tuổi trẻ chính là lúc phải đối diện với nhiều thứ khó khăn nhất. Không thể nói “cứ đi là sẽ đến”, mà đôi lúc chỉ cảm thấy bất lực hoặc thậm chí là muốn bỏ cuộc. Không thể dùng thái độ lạc quan để đối diện với tất thảy điều khó khăn để nở nụ cười, mà đôi lúc chỉ cảm thấy tại sao cuộc sống khó khăn, còn chúng ta lại luôn cô đơn quá.</p><br />
<p>Tuổi 20 chính là những ngày như thế này phải không? Những ngày mà bị đẩy ra ngoài đời để một mình chiến đấu, chỉ trách thời gian trôi quá nhanh, mặc kệ sẽ ra sao, vẫn phải tìm cách để sinh tồn.</p><br />
<p>Rồi chúng ta sẽ làm gì với cuộc đời mình? Tuổi 20 sẽ dạy chúng ta điều đó! Khi mà thênh thang những con đường mở ra trước mắt, khi mà phải buông bỏ và hy sinh quá nhiều thứ để đi tiếp con đường trưởng thành.</p><br />
<p>Những điều ước bắt đầu trở nên xa xỉ, chỉ có hiện thực là ở ngay trước mắt. Tuổi 20 dạy chúng ta nhiều thứ, và cũng từ tuổi 20, chúng ta biết cách để không cảm thấy tuyệt vọng, trong những lúc khó khăn nhất.</p><br />
<p>Khi ấy, chúng ta đã trưởng thành!</p>
<p>Tác giả: chưa rõ</p>";
		break;
        case "pe-Cam":
		$tmp_content = "{image : ' https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-ash3/t1.0-9/s720x720/45346_134102556743833_1548337225_n.jpg', title : 'Đó là một cô gái nhìn tự nhiên, trong sáng.'},
                            {image : 'https://scontent-a-hkg.xx.fbcdn.net/hphotos-prn2/t1.0-9/p180x540/971473_212636762223745_2090027723_b.jpg', title : 'Một cô gái có cái răng thụt rất dễ thương'},
                            {image : ' https://scontent-b-hkg.xx.fbcdn.net/hphotos-frc1/t31.0-8/s720x720/883346_177909469029808_542172854_o.jpg', title : 'Một cô gái thông minh, \"siêng học\" ^_^'},
                            {image : ' https://scontent-b-hkg.xx.fbcdn.net/hphotos-frc3/t1.0-9/s720x720/525190_176985239122231_822110459_n.jpg', title : ' Và nụ cười không bao giờ tắt'},
                            {image : ' https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-ash2/t1.0-9/s720x720/229879_122788477875241_539398101_n.jpg', title : 'Một nụ cười kiểu trăng khuyết của cô gái vùng sông nước'},
                            {image : ' https://scontent-b-hkg.xx.fbcdn.net/hphotos-prn1/t1.0-9/p180x540/560825_117352968419265_54093753_n.jpg', title : 'Đọ sắc cùng lũ bạn. Mười phân vẹn mười hén.'},
                            {image : ' https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-frc3/t1.0-9/10003444_306505076170246_925130886_n.jpg', title : 'Cô bạn thân từ Năm Căn ^_^ (chắc vậy)'},
                            {image : ' https://scontent-a-hkg.xx.fbcdn.net/hphotos-prn2/t1.0-9/q71/s720x720/1959276_302734629880624_440879338_n.jpg', title : 'Cô gái mắt hí vùng sông nước'},
                            {image : ' https://scontent-a-hkg.xx.fbcdn.net/hphotos-prn2/t1.0-9/q71/s720x720/1390560_251576494996438_1046623631_n.jpg', title : 'Nhỏ nhắn và xinh xắn ^_^'},
                            {image : ' https://scontent-b-hkg.xx.fbcdn.net/hphotos-ash4/t1.0-9/s720x720/223588_159193774234711_695495273_n.jpg', title : 'Vui tươi cùng cá sấu phía sau hén'},
                            {image : ' https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-frc1/t1.0-9/s720x720/317746_122763827877706_803312497_n.jpg', title : 'Một thoáng e thẹn'},
                            {image : ' https://scontent-a-hkg.xx.fbcdn.net/hphotos-ash2/t1.0-9/380832_134102146743874_1663542706_n.jpg', title : 'Ợ. Một sát thủ sát nam nhi hàng loạt @_@'}
                                ";
                $info_title="Cẩm - một cô gái Cà Mau trong mắt tôi!!!";
                $info_content="<p>Cẩm - cô gái Cà Mau đầu tiên tôi được nói chuyện. Những lời nói đầu tiên, cách đây cũng khá lâu rồi, lâu đến độ tôi không nhớ rõ nói những gì. Chỉ nhớ là rất khó nói chuyện _ _\".Cũng phải. Đó là cách phản ứng chính đáng của cô gái chân chất đến từ vùng sông nước. </p> <br />
                                <p>Lần đầu tiên thấy Cẩm qua ảnh, tôi đã nhìn thấy hình tượng một cô gái sống tình cảm, hồn nhiên,sống ngay thẳng. Đó là mẫu người mà khi bạn tiếp xúc với họ, bạn biết rằng trước mặt người khác họ không có gì để giấu, họ nghĩ gì họ sẽ nói hết cho bạn nghe, hãy tin họ, rất thẳng tính trong lời ăn tiếng nói ^_^</p> <br >
                                <p>Một cô gái Cà Mau, không yêu giọng hò sông nước mà thích nhạc Hàn quốc, fan nhóm XBO gì đó. Một cô gái theo lối sống hiện đại, Đông Á hóa ^_^, một tín đồ của KPOP. Chắc tại vì thế mà nhìn mắt em hơi hí hí :D</p> <br />
                                <p>Nói dài nói dai hồi nói dại, em lại thẳng tính chửi anh nữa thì khổ. Dừng văn tại đây nhé. Chào cô gái Cà Mau ^_^</p>";
		break;					
	case "pe-Ly":
		$tmp_content = "{image : 'https://scontent-b-hkg.xx.fbcdn.net/hphotos-frc1/t1.0-9/1795671_514926868626132_1035471959_n.jpg', title : 'đây là tấm ảnh đầu tiên làm anh biết đến em mặt tròn'},
                                {image : ' https://scontent-a-hkg.xx.fbcdn.net/hphotos-frc3/l/t1.0-9/1235131_571826412881663_1588186280_n.jpg', title : 'lại là cái mặt tròn :v'},
                                {image : ' https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-frc1/t1.0-9/1233475_571819349549036_1855542029_n.jpg', title : 'thân hình cũng chuẩn gớm - mỗi tội hình như cái tay cong'},
                                {image : ' https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-prn2/t1.0-9/1185156_571817539549217_1143608879_n.jpg', title : 'mặt tròn nhưng được cái dẻo dai - biết múa'},
                                {image : ' https://scontent-b-hkg.xx.fbcdn.net/hphotos-frc3/t1.0-9/305183_108147309292696_1584809605_n.jpg', title : 'mặt tròn nhưng mà học giỏi - có giấy khen nhưng chả biết của ai :D'},
                                {image : 'https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-ash2/t1.0-9/s720x720/178902_4053179570227_927878732_n.jpg ', title : 'mặt tròn nhưng biết ca - biết hát'},
                                {image : ' https://scontent-b-hkg.xx.fbcdn.net/hphotos-frc3/t1.0-9/178924_115688281923184_1536632852_n.jpg', title : 'mặt tròn nhưng mà ăn cũng máu - lúc ăn cái mặt cùng tròn nữa :v'},
                                {image : ' https://scontent-b-hkg.xx.fbcdn.net/hphotos-frc3/t1.0-9/165311_121936554540507_6503669_n.jpg', title : 'ăn...ăn...ăn...ăn everywhere'},
                                {image : ' https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-frc3/t1.0-9/481812_432873453446814_344682408_n.jpg', title : 'mặt tròn nhưng được cái thân thiện - dễ kết bạn'},
                                {image : ' https://scontent-a-hkg.xx.fbcdn.net/hphotos-ash2/t1.0-9/598401_432872970113529_584755735_n.jpg', title : ''},
                                {image : ' https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-frc1/t1.0-9/1005926_478502278911706_1316829621_n.jpg', title : 'mặt tròn nhưng cũng cao gớm'},
                                {image : ' https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-ash2/t1.0-9/485156_605469626146829_1474663189_n.jpg', title : 'hotgirl A1 có khác - nhiều giai bu _ _\"'},                                
                                {image : ' https://scontent-a-hkg.xx.fbcdn.net/hphotos-ash3/t1.0-9/548958_4053183930336_519728735_n.jpg', title : '1s cho khuôn mặt đầy biểu cảm'},                          
                                {image : ' https://scontent-b-hkg.xx.fbcdn.net/hphotos-frc3/t1.0-9/37619_105444112843076_7144863_n.jpg', title : 'hi'},
                                {image : ' https://scontent-b-hkg.xx.fbcdn.net/hphotos-prn1/t1.0-9/47862_103089869752377_2575345_n.jpg', title : 'cô Tiên cũng sợ - chả giám mở mắt nhìn phù thùy :v'},
                                {image : ' https://scontent-b-hkg.xx.fbcdn.net/hphotos-ash3/t1.0-9/47862_103089873085710_5028876_n.jpg', title : 'mặt tròn nhưng được cái nhìn tự tin năng động'},
                                {image : ' https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-ash3/t1.0-9/63605_128851647176199_6226521_n.jpg', title : 'và...'},
                                {image : ' https://scontent-a-hkg.xx.fbcdn.net/hphotos-ash2/t1.0-9/155396_128851457176218_316621_n.jpg', title : 'XINH ĐẸP'}
                                ";
                $info_title="pé Lì - cô gái A1 mặt tròn ^_^";
                $info_content="<p>pé Lì mặt tròn - không biết tự bao giờ anh nghĩ ra cái tên đó cho em, có thể từ khuôn mặt tròn của em, có thể vì sự hoàn hảo không khuyết điểm của em, nhưng mà một cái tên hay đâu cần phải biết nó đến từ đâu đâu em nhỉ, miễn là từ cái tên đó anh có thể phân biệt em với các cô gái khác, có thể gọi tên em trong suốt cuộc đời sau này.</p> <br />
<p>Có lẽ lần đầu tiên anh biết đến em là tấm hình em chụp chung với các anh chị A1 - ấn tượng ngay bởi cái mặt tròn y hệt mình. Và facebook như cánh cửa thần kì, giúp anh và em kết nối với nhau từ hai kẻ xa lạ - phải không sư mụi mặt tròn nhỉ?</p> <br />
<p>Mà có phải vì cái mặt tròn mà anh và em trở nên thân thiết với nhau không nhỉ?</p> <br />
<p>Chẳng phải vì sự thông minh học giỏi chịu khó của em, có thể nuốt chửng toàn bộ đống bài tập, sách vở mà vẫn không nản chí. tiếp tục, tiếp tục từng ngày từng ngày một…</p> <br />
<p>Chẳng phải vì nét đẹp tinh tế của em, chắc khiến nhiều chàng trai phải ngã ngựa đeo bám, lăn, bò, lết, trườn theo.</p> <br />
<p>Chẳng phải vì thân hình chuẩn như hotgirl của em…biết múa biết làm duyên</p> <br />
<p>Chẳng phải vì giọng nói dễ thương…biết ca biết hát.</p> <br />
<p>Chẳng phải vì sự ham ăn của em, có thể cười tít cả mắt khi nhìn thấy đồ ăn.</p> <br />
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mà là vì…</p> <br />
<p>Sự cởi mở, nói chuyện dễ thương của một cô gái miền tây. Mỗi lần anh nói chuyện với em là bao nhiêu nỗi buồn phiền, mệt mỏi tan hết. Chính sự lì lợm, dễ ghét của em đó ^_^</p> <br />
<p>Lâu lâu hay pha trò, hay dùng sticker ngộ nghĩnh như anh. Hôm nào anh với em đại chiến sticker nhé. haha</p> <br />
<p>Ờ, nhìn cũng dễ thương, cá tính nữa, mà hình như hơi đen thì phải. haha</p> <br />
<p>…….</p> <br />
<p>Thôi, nói dài nói dai hồi nói dại, em lại yếm bùa anh nữa thì tội anh. Ugm, Không biết anh còn có thể nói chuyện như vầy với em được bao lâu nữa, nhưng mà có em đi ngang cuộc đời anh, anh cảm thấy không hối tiếc. Haha.</p> <br />
<p>Bye nhé, cô gái A1 vừa lì vừa tròn ^_^</p> <br />
";
		break;
	default:
		$tmp_content = NULL;
		break;
					
	}
}else
{
$info_title="Chào mừng bạn đến với Ốc đảo – Album";
$info_content="<p>Tôi có một sở thích mỗi khi bị stress hoặc mệt mỏi, chán trường đó là nằm nghe nhạc và xem album ảnh đẹp. Mỗi khi được thưởng thức việc đó, tôi cảm thấy có hứng thú hơn, cuộc sống đỡ mệt mỏi hơn và trở nên có màu sắc sặc sở hơn,… và thỉnh thoảng tìm được sự đồng cảm trong từng lời hát hoặc trên từng bức ảnh mình lướt qua.</p><br />
<p>Đó là lý do tôi đã cố gắng dành thời gian của mình tạo ra trang web này, với mong muốn chia sẻ một nơi để mọi người xả stress khi mệt mỏi, khi muốn đi đâu đó thưởng thức cảnh đẹp, khi cảm thấy buồn và muốn tìm sự đồng cảm trong cuộc sống, khi muốn cuộc sống trở nên có màu sắc hơn từ âm nhạc… Hãy tìm đến với trang web này như là một người bạn khi bạn cần .</p><br />
<p>Chúc các bạn tìm ốc đảo mình mong muốn khi đi trên sa mạc khắc nghiệt của cuộc sống này.Hãy đến và góp ý giúp mình xây dựng ốc đảo trở nên hoàn thiện hơn nhé ^_^</p><br />
<p>(Trang web này mình dựng bắt nguồn từ cảm hứng bản thân và từ trang web khuya.vn và một vài trang web âm nhạc khác) </p><br />
<p>Giờ thì hãy bắt đầu click vào cái biểu tượng hình máy bay trên kia để bay đến nơi bạn muốn đến và thưởng thức âm nhạc nhé ^_^</p> 
";

}

if ($tmp_content == NULL)
{
	$tmp_content = "{image : 'https://farm6.staticflickr.com/5580/14720924327_ece0e828e5_b.jpg', title : 'Dòng chảy xuyên không gian và thời gian'},
                        {image : 'https://farm4.staticflickr.com/3881/14854706026_44c3009be0_b.jpg', title : 'Đưa bạn đến thế giới đất của những câu chuyện cổ tích'},
{image : 'https://farm6.staticflickr.com/5572/14877344032_ea9271a1fa_b.jpg', title : 'Hay vượt không gian đến với mảnh đất châu Âu hiện đại, tao nhã'},
{image : 'https://farm6.staticflickr.com/5582/14691003070_13257b0122_b.jpg', title : 'Tìm về miền quê đầy nắng gió nhưng thanh bình'},
{image : 'https://farm6.staticflickr.com/5574/14691159167_1f64a15daf_b.jpg', title : 'Hay ngược dòng thời gian để tìm về ký ức của tuổi thơ'},
{image : 'https://farm4.staticflickr.com/3894/14907476505_be39bc9435_b.jpg', title : ''}
";
}
$content_user_wanna_go = "<script type='text/javascript'>			
									jQuery(function($){
										
										$.supersized({
										
											// Functionality
											slide_interval          :   7000,		// Length between transitions
											transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
											transition_speed		:	700,		// Speed of transition
											image_path				:	\"http://album.ocdao.net/public/img\",										   
											// Components							
											slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
											slides 					:  	[			"
																		.$tmp_content.																															
																		"]									
										});
									});
									</script>";
if ($info_content == NULL)
    $info_content = "Đang trong quá trình viết....";

if ($share_image == NULL)
$share_image = "https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1.0-1/c45.0.160.160/p160x160/10003496_1414550775473944_845382285728940849_n.jpg";

echo '<meta property="og:image" content="'.$share_image.'" />';
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo '<meta property="og:url" content="'.$actual_link1.'" />';
?>
