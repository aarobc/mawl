
if(!array_key_exists('asset_id', $info)){
   $sql='SELECT `prefix` FROM '.EQUIPMENT_CATEGORY_TABLE.' WHERE `category_id` = '.$info['category_id'];
   if(($res=db_query($sql)) && db_num_rows($res)) {
      $row=db_fetch_array($res);
      if($row['prefix']){
         $code = $row['prefix'].'-'; 

         $sql = "select REPLACE(`asset_id`, '$code', '') AS max 
         from osticket.ost_equipment 
         WHERE asset_id LIKE '$code%' 
         ORDER BY asset_id DESC LIMIT 1";

         if($res=db_query($sql)){
            if(db_num_rows($res)) {
               $row=db_fetch_array($res);
               $max = sprintf('%03d', $row['max'] + 1);
               $info['asset_id'] = $code.$max;  
            }
            else{
                //means is blank and starting from zero
                $info['asset_id'] = $code.'000'; 
            }
         }
      }
   }
}
