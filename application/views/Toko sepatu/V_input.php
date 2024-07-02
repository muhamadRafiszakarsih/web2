<html>
    <head>
        <title>TOKo sepatu</title>
</head>
<body>
    <center>
        <from action="<?php echo base_url()?>tokosepatu/cetak" method="post">
        <table>
            <tr>
            <th colspan="3">
                toko sepatu
                input Transaksi
</th>

            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
                <td>
                    <input type="text" name='nama' id="nama" value=<?php echo set_value("nama"); ?>">
                    </td>
                    <td><?=form_error('nama'); ?></td>
</tr>
<tr>
                <td>Nomor hp</td>
                <td>:</td>
                <td>
                    <input type="text" name='nohp' id="nama" value=<?php echo set_value("nohp"); ?>">
                    </td>
                    <td><?=form_error('nohp'); ?></td>
</tr>
<tr>
                <td>merek sepatu</td>
                <td>:</td>
                <td>
                    <select name="merek" id="merek">
<option value="">_Pilih-</option>
<option value="Nike">Nike</option>
<option value="Adidas">Adidas</option>
<option value="kicker">kicker</option>
<option value="Eiger">Eiger</option>
<option value="Bucherri">Bucherri</option>
                    </select>
</td>
<td><?=form_error('merek');?></td>
</tr>
<tr>
    <td>Ukuran sepatu</td>
    <td>:</td>
    <td>
        <select name="Ukuran" id="ukuran">
            <option value="">-pilih-</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">43</option>
            <option value="45">44</option>



        </select>
</td>
<td><?=form_error('ukuran'); ?></td>
</tr>
<tr>
    <td colspan="3" align="center">
        <input type="submit" value="simpan">

    </td>
</tr>
        </table>
</from>
</center>
</body>
</html>