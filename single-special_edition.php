<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta content="text/html;charset=iso-8859-1" http-equiv="content-type"></meta>
	<title>Special EDition | <?php global $post; echo get_the_time( 'F Y' ); ?></title>
	<link type="image/x-icon" href="http://dredf.org/favicon.png" rel="icon"></link>
</head>
<body bgcolor="#eeeeee">
<p align="center" style="color: black; size: large">Having trouble reading this email? <a href="<?php echo get_permalink( $post->ID ); ?>">View it in your browser</a></p>
<table width="750" cellspacing="0" cellpadding="8" border="0" align="center" style="font-family:Arial, Helvetica, Geneva, SunSans-Regular, sans-serif">
<tbody>
	<tr bgcolor="#ffffff">
		<td bgcolor="#ffffff" width="530" height="145"><img src="http://www.dredf.org/images/news-se.jpg" alt="Disability Rights Education and Defense Fund. Advocating for Disability Civil Rights since 1979"></td>
		<td valign="middle" align="center" bgcolor="#DD2233" width="220" height="145"><p><font face="Arial, Helvetica, Geneva, SunSans-Regular, sans-serif" color="#ffffff" size="4">In this Issue:</font></p>
			<p><font size="3" color="#ffffff" face="Arial, Helvetica, Geneva, SunSans-Regular, sans-serif"><?php echo get_the_title( $post->ID ) ?></font></p></td>
	</tr>
	<tr>
		<td width="530" bgcolor="#DD2233" align="center" style="color:#ffffff"><?php echo get_the_time( 'F Y' ); ?></td>
		<td bgcolor="#ffffff" width="220"></td>
	</tr>
	<tr>
		<td valign="top" width="450" bgcolor="#ffffff" style="padding:40px">
			<?php echo apply_filters( 'the_content', $post->post_content ); ?>
			<p>&copy; <?php echo get_the_time( 'Y' ); ?></p>
		</td>
		<td valign="top" bgcolor="#fafad2" width="220" style="font-size: small">
			<?php print_custom_field( 'enewssidebar' ); ?>
			<p><?php edit_post_link(); ?></p>
		</td>
	</tr>
	<tr>
		<td width="530" height="10" bgcolor="#D30E44"></td>
		<td width="220" height="10" bgcolor="#D30E44"></td>
	</tr>
</tbody>
</table>
</body>
</html>

