<html>

<body>
	<div style="margin: 0px; padding: 70px 0px; width: 100%; background-color: rgb(247, 247, 247);">

		<table width="800" cellspacing="0" cellpadding="5" border="0" align="center" style="background-color:#ffffff; border:1px solid #dedede; border-radius:3px!important">


			<tr style="padding:48px; display:block">

				<td style="padding:48px; font-size: 14px; line-height: 150%; text-align: left; color: rgb(99, 99, 99); font-family:" Helvetica Neue",Helvetica,Roboto,Arial,sans-serif">

					<p style="margin: 0px 0px 16px; font-size: 14px; color: rgb(115, 115, 115); line-height: 150%">You have received an enquery from User - {{$data['name'] ?? ''}} The information is as follows:</p>

					<table width="700" cellspacing="0" border="1" align="center" style="border:1px solid #e5e5e5; font-size: 15px;">

						<tr style="background-color:#fff;">

						</tr>
						<tr>

							<th width="65" style="text-align:left; color:#636363; border:1px solid #e5e5e5; padding:12px"> Name </th>

							<td width="10" style="text-align:left; vertical-align:middle; border:1px solid #eee; word-wrap:break-word; color:#636363; padding:12px">{{$data['name'] ?? ''}}</td>

						</tr>

						<tr>

							<th width="65" style="text-align:left; color:#636363; border:1px solid #e5e5e5; padding:12px">Email </th>

							<td width="10" style="text-align:left; vertical-align:middle; border:1px solid #eee; word-wrap:break-word; color:#636363; padding:12px">{{$data['email'] ?? ''}}</td>

						</tr>
						<tr>

							<th width="65" style="text-align:left; color:#636363; border:1px solid #e5e5e5; padding:12px">Phone </th>

							<td width="10" style="text-align:left; vertical-align:middle; border:1px solid #eee; word-wrap:break-word; color:#636363; padding:12px">{{$data['phone'] ?? ''}}</td>

						</tr>

						
						<tr>

							<th width="65" style="text-align:left; color:#636363; border:1px solid #e5e5e5; padding:12px">Query </th>

							<td width="10" style="text-align:left; vertical-align:middle; border:1px solid #eee; word-wrap:break-word; color:#636363; padding:12px">{{$data['message'] ?? ''}}</td>

						</tr>


					</table>

				</td>

			</tr>

		</table>

	</div>

</body>

</html>