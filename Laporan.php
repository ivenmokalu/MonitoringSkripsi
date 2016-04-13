<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $DatabaseHelper = new DatabaseHelper();
        
        // When 	: I navigate to Performa Dosen Pembimbing 
        function dropdown( $name, array $options, $selected=null ){
            /*** begin the select ***/
            $dropdown = '<select name="'.$name.'" id="'.$name.'">'."\n";

            $selected = $selected;
            /*** loop over the options ***/
            foreach( $options as $key=>$option )
            {
                /*** assign a selected value ***/
                $select = $selected==$key ? ' selected' : null;

                /*** add each option to the dropdown ***/
                $dropdown .= '<option value="'.$key.'"'.$select.'>'.$option.'</option>'."\n";
            }

            /*** close the select ***/
            $dropdown .= '</select>'."\n";

            /*** and return the completed dropdown ***/
            return $dropdown;
        }
         
        // Then 	: I should see Tabel dan Grafik Dosen Pembimbing
        try {
            /*** query the database ***/
            
            // getAllDosenPembimbings
            $dosens = $DatabaseHelper->getAllDosensPembimbing();
            
            // getBimbingan per Dosens
            for($i = 0; $i < $dosens; $i++){
                $temp = $DatabaseHelper-> getBimbingan(dosens[i].getNik());
                $bimbingan[] = $temp;
            }
            
            // countBimbingan per Dosens
            
            
            // presents Data call API -> jpgraph
            
        }
        catch(PDOException $e)
        {
            echo 'No Results';
        } 
        
        
        ?>
    </body>
</html>
