<?php 
/***************************************
* STE PER FEDERFARMA LOMBARDIA -  
 * Salva i contenuti caricati, in una sottofolder di upload, con il nome del custom post type associato
 * es. nel caso di diritto-e-farmacia, la folder sarà appunto /uploads/diritto-e-farmacia/
 *
 * Funzione attiva solo per i seguenti CPT
 * > diritto-e-farmacia
 * > circolari
 * > informative
 * > segnalazioni
****************************************/
 add_filter('upload_dir', 'custom_cpt_dir');

 function custom_cpt_dir( $param ){

     $validCPT = array("diritto-e-farmacia","circolari","informative","segnalazioni");

     if (!isset($_REQUEST['post_id'])) {
        return $param;
     }
     $id = (int)$_REQUEST['post_id'];

     $cpt = get_post_type( $id );

     if (in_array($cpt, $validCPT)) {
         //$outkey=implode(",",array_keys($param));
         //$outstring=implode(",",$param);
         //error_log("out=$outkey");
         //error_log("out=$outstring");

         $param['subdir'] = $cpt;
         $param['basedir'] = $param['basedir'] . '/' . $param['subdir'] . '/';
         $param['path'] = $param['basedir'];

         $param['baseurl'] = $param['baseurl'] ."/". $cpt;;
         $param['url'] = $param['baseurl'];

         error_log("basedir={$param['basedir']}");
         error_log("subdir={$param['subdir']}");
         error_log("path={$param['path']}");

         error_log("baseurl={$param['baseurl']}");
         error_log("url={$param['url']}");

         error_log("error={$param['error']}");

     }

     return $param;

 }


add_action('delete_attachment', 'delete_hook_for_CPT');

function delete_hook_for_CPT($postId) {

    $validCPT = array("diritto-e-farmacia","circolari","informative","segnalazioni");

    $postType = get_post_type($postId);

    if ($postType == "attachment") {
        $guid = get_the_guid($postId);
        //i.e. http://www.newffl.dev/wpffl/wp-content/uploads/circolari/615TODELETE.pdf

        //get the last folder, and the filename
        $tokenized = array_reverse(explode(DIRECTORY_SEPARATOR,$guid));
        $subfolder = $tokenized[1];
        $filename = $tokenized[0];

        //subfolder names are equals to CPT names
        if (in_array($subfolder, $validCPT)) {
            $wp = wp_get_upload_dir();
            $wpuploaddir = $wp['path'];

            $fileToRemoveAbsolutePath = $wpuploaddir.DIRECTORY_SEPARATOR.$subfolder.DIRECTORY_SEPARATOR.$filename;

            error_log("Removing file $fileToRemoveAbsolutePath ...");
            unlink($fileToRemoveAbsolutePath);
        }

    }

};

?>