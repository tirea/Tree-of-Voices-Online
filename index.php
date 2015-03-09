<!DOCTYPE html>
<html>
    <head>
        <title>Tree of Voices Web App</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="jquery-2.0.3.min.js"></script>
        <script src="eltu.js"></script>
    </head>
    <body>
    
        <!-- TODO: load the lsn file and check the answer (PHP) -->
        <?php 
        
            $lsn = file("lessons/Na'vi Numbers 1-8/Lesson.lsn");
            
            $n = explode("=",$lsn[0]); $Name = $n[1]; 
            $t = explode("=",$lsn[1]); $Type = $t[1]; 
            $s = explode("=",$lsn[2]); $Slides = $s[1]; 
            $v = explode("=",$lsn[3]); $Version = $v[1]; 
            $i = explode("=",$lsn[4]); $Info = $i[1];
            
            $QData = array_slice($lsn,5,count($lsn));
            
            echo 'Name: '.$Name.'<br>'.
                'Type: '.$Type.'<br>'.
                'Slides: '.$Slides.'<br>'.
                'Version: '.$Version.'<br>'.
                'Info: '.$Info.'<br>';

            $qnum = 0;

            $w = explode("=",$QData[$qnum]); $word = $w[1];
            
            $a = explode("=",$QData[$qnum+1]); $c_a = $a[1];
            $b = explode("=",$QData[$qnum+2]); $c_b = $b[1];
            $c = explode("=",$QData[$qnum+3]); $c_c = $c[1];
        ?>
        
        <?php echo "<h1>".$word."</h1>" ?>
    
        <div class="container">
            <!-- <button id="play">Repeat sound</button> -->
        </div>
    
        <div class="container">
            <div class="choice correct" id="choice_a"><?php echo $c_a; ?></div> 
            <div class="choice incorrect" id="choice_b"><?php echo $c_b; ?></div> 
            <div class="choice incorrect" id="choice_c"><?php echo $c_c; ?></div>
        </div>
    
        <footer>Tree of Voices Web App v0.1[Alpha] | <span onclick="alert('Tree of Voices by JayWalker\nHTML5 Web App Port by Tirea Aean\nGPL 3\nwww.LearnNavi.org')">About</span></footer>
    
    </body>
</html>
