<?php


class model
{
    public $conn="";
    function __construct()
    {
       $this->conn =  new mysqli("localhost","root","","furniture");

    //    if($this->conn)
    //    {
    //     echo "connected..!";
    //     // exit;
    //    }
    }

    function insert($table,$data)
    {
       $col_arr= array_keys($data);
       $col = implode(",", $col_arr);

       $val_arr = array_values($data);
       $val = implode("','",$val_arr);

       // insert into users (name,email) values ('xyz','x@gmail.com')
       $query = "insert into $table ($col) values ('$val')";

       $run = $this->conn->query($query);

       return $run;


   }

   function select($tbl)
   {
        $sel = "select * from $tbl";
        $res = $this->conn->query($sel);
        while($fetch = $res->fetch_object())
        {
           $arr[] = $fetch;
        }

     if(!empty($arr))
     {
       return $arr;
     }


   }

   function select_where($tbl,$where)
   {
       $col_arr = array_keys($where);// name,image
       $val_arr = array_values($where);

       // "select * from table where id=1 and email="df";

       $sel=  "select * from $tbl where 1=1";

       $i=0;
       foreach($where as $w)
       {
           $sel .= " and $col_arr[$i] = '$val_arr[$i]'";
           $i++;
       }


       $run = $this->conn->query($sel);

       return $run;
   }

   function update($tbl,$data,$where)
   {
      $upd =  "update $tbl set ";
      $col_arr = array_keys($data);// name,image
      $val_arr = array_values($data);
      $count = count($data);
       $j=0;
       foreach($data as $d)
       {
           if($count==$j+1)
           {
            $upd.= "$col_arr[$j] = '$val_arr[$j]'";
           }
           else
           {

            $upd.= "$col_arr[$j] = '$val_arr[$j]',";
            $j++;
           }
       }
       $upd.= "where 1=1";
      $wcol_arr = array_keys($where);// name,image
      $wval_arr = array_values($where);
       $i=0;
      foreach($where as $w)
      {
       $upd.= " and $wcol_arr[$i] = '$wval_arr[$i]'";
       $i++;
      }

     $run = $this->conn->query($upd);

      return $run;
   }
}
