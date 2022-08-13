                        <?php foreach ($wilad as $des ):  
                                    
                                $wilads[] = $des[$indikatornya];
                                $kabkots[] = $des['kabkot']; 
                                $ndata[] = number_format(($des[$indikatornya]/$total)*100,2);?>
                          <tr>
                            <td ><?php echo $des['kabkot']; ?></td>
                            <td><?php echo $des[$indikatornya]; ?></td>
                            <td><?php echo number_format(($des[$indikatornya]/$total)*100,2)."%"; ?></td>

                          </tr>
                        <?php endforeach; ?>