<?php
include "conn.php";
?>
<div>
  <div class="mb-5" ><p class="ROW1">ILP KUALA LANGAT PELAJAR</p></div>
    <a href="tambahpelajar.php">TAMBAH</a>
	<link rel="stylesheet" href="style.css">
</div>

<div class="table ">
  <div class=" table">
        <table border=2>
          <thead>
            <tr>
              <th scope="col">
                ID
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              NAMA PELAJAR
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                NO_KP
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                NO_PH
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              JANTINA
              </th><br><br>
             
            </tr>
          </thead>
          <tbody>
            <?php
            $data = mysqli_query($con, "SELECT * FROM info_pelajar");
            while ($info = mysqli_fetch_array($data)) { ?>
                  <tr class="bg-gray-400 border-b">
              <td>
                <?php echo $info["id"]; ?>
              </td>
              <td>
                <?php echo $info["nama_pelajar"]; ?>
              </td>
              <td>
              <?php echo $info["no_kp"]; ?>
              </td>
              <td>
              <?php echo $info["no_hp"]; ?>
              </td>
              <td>
                <?php echo $info["jantina"]; ?>
              <br></td><br>
              <td>
              <div>
                <button type="button" class="inline-block px-6 py-2.5 bg-blue-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-lg hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"><a href="kemaskinipelajar.php?update_id=<?php echo $info["id"]; ?>">UPDATE</a></button>
    <div>

                <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="padampelajar.php?delete_id=<?php echo $info["id"]; ?>">DELETE</a></button><br><br>
            </div>
        </div>
    </div>
</div>
              </div>
            </td>
              </tr>
<?php } ?>


          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
