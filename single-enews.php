<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta content="text/html;charset=iso-8859-1" http-equiv="content-type"></meta>
		<title><?php global $post; echo get_the_title( $post->ID ) . " | " . get_the_time( 'F Y', $post->ID ) ?></title>
		<link type="image/x-icon" href="http://dredf.org/favicon.png" rel="icon"></link>
	</head>
	<body bgcolor="EEEEEE">
		<p align="center" style="color: black; size: large">Having trouble reading this email? <a href="<?php echo get_permalink( $post->ID ); ?>">View it in your browser</a></p>
<table width="750" cellspacing="0" cellpadding="8" align="center" border="0" style="font-family:Arial, Helvetica, Geneva, SunSans-Regular, sans-serif">
	<tr bgcolor="#FFFFFF">
		<td bgcolor="#FFFFFF" width="530" height="145"><img src="http://www.dredf.org/images/news-logo.jpg" alt="Disability Rights Education and Defense Fund. Advocating for Disability Civil Rights since 1979"></td>
		<td valign="middle" align="center" bgcolor="#DD2233" width="188" height="145" style="color: #FFFFFF; size: medium"><p><font face="Arial, Helvetica, Geneva, SunSans-Regular, sans-s    erif" color="#ffffff" size="4">In this Issue:</font></p><p><b><?php echo get_the_title( $post->ID ); ?></b></p></td>
	</tr>
	<tr>
		<td width="530" bgcolor="#DD2233" align="center" style="color: #FFFFFF; size: medium"><b><?php echo get_the_time( 'F j, Y', $post->ID ); ?></b></td>
		<td bgcolor="#FFFFFF" width="188"></td>
	</tr>
	<tr>
		<td valign="top" width="450" bgcolor="#FFFFFF" style="padding: 40px">
			<?php echo apply_filters( 'the_content', $post->post_content ); ?>
			<p>&copy; <?php echo get_the_time( 'Y', $post->ID ); ?></p>
		</td>
		<td valign="top" bgcolor="#fafad2" width="188" style="font-size: small">
			<?php print_custom_field( 'enewssidebar' ); ?>
			<p><?php edit_post_link(); ?></p>
		</td>
	</tr>
	<tr>
		<td width="530" height="10" bgcolor="#DD2233"></td>
		<td width="188" height="10" bgcolor="#DD2233"></td>
	</tr>
</table>
</body>
</html>
