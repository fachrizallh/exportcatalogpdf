{php}
$var = $template->get_template_vars('katalogs');
//print_r($var);
$link = new Link();
echo'<br><br><br><table align="center" width="100%">
            <tbody>';
for($a = 0; $a < count($var);)
{
    echo '<tr>';
    for($i = 0; $a < count($var) && $i < 4; $a++, $i++) {
		$nana = $link->getImageLink($var[$a]['link'], $var[$a]['id_image'], 'small_default');
        echo '<td border="0" width="1%"></td><td border="1" width="23%">
				<tr>
					<td>';echo '<br><br><img src= "' .$nana. '">';echo'</td>
				</tr>';
			echo'<tr>
					<td>';echo $var[$a]['name'];echo'</td>
				</tr>';
			echo'<tr>
					<td>';echo 'Rp ';echo round($var[$a]['price'],0);echo'</td>
				</tr>
			</td><td border="0" width="1%"></td>';
    }
    echo '</tr><br>';
}
echo'
</tbody>
        </table>';
{/php}