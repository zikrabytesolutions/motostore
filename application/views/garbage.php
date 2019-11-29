 <!-- <div class="p-left-txt">
Attribute for product page
 <?php
                                                                $attibute = $CI->findattribute($plist->id);
                                                                if ($attibute) : foreach ($attibute as $att) :
                                                                        ?>
                                                                <div class="color-choose flex-container justify-content-start mb-3 ">
                                                                    <p class="mr-2 mb-0"><?= $att->atname ?>:</p>
                                                                    <?php $attibutevalue = $CI->findattributevalue($att->attribute_id, $att->product_id); ?>
                                                                    <?php if ($att->atname == 'color') : ?>
                                                                        <?php if ($attibutevalue) : foreach ($attibutevalue as $attv) : ?>
                                                                                <div>
                                                                                    <input data-image="red" type="radio" value="red">
                                                                                    <label for="red"><span style="background-color:<?= $attv->codes ?>;"></span></label>
                                                                                </div>
                                                                        <?php endforeach;
                                                                                            endif; ?>
                                                                    <?php else : ?>
                                                                        <?php if ($attibutevalue) : foreach ($attibutevalue as $attv) : ?>
                                                                                <div>
                                                                                    <input data-size="s" type="radio" id="s" name="size" value="s">
                                                                                    <p style="margin-top: 10px;"><?= $attv->value_name . ' ' ?></p>
                                                                                </div>
                                                                        <?php endforeach;
                                                                                            endif; ?>
                                                                    <?php endif ?>
                                                                </div>
                                                        <?php endforeach;
                                                                endif; ?>


                                                    </div> -->


                                                    Attribute libxml_disable_entity_loader

                                                    <a href="<?= base_url('product/details/'.$pid.'/'.$first.'/'.$second.'/'.$pd->product)?>">
                                                <input data-image="red" type="radio" value="red"
                                                    <?php if($rfirst==$pval->first){echo "checked";}?>>
                                                <label for="red"><span style="background-color:<?= $pval->codes?>;">
                                                    </span></label>
                                            </a>



                                            <a onclick="variation('<?= $pid ;?>','<?= $first ;?>','<?= $second;?>','<?=$pd->product;?>'); ">                                             
                                                <input data-image="red" type="radio" value="red"
                                                    <?php if($rfirst==$pval->first){echo "checked";}?>>
                                                <label for="red"><span style="background-color:<?= $pval->codes?>;">
                                                    </span></label>
                                            </a>