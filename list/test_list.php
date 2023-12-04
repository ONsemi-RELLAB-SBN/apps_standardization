<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
<html>
    <head></head>
    <body>
        <table>
            <?php include '../class/config.php';
            $stmt = $db_con->prepare("SELECT eqpt.id, a.name AS eqpt_id, b.name AS lab_location, c.name AS product_group, d.name AS category, e.name AS lab_manager, f.name AS dedicate_usage, 
                                        GROUP_CONCAT(DISTINCT g.name SEPARATOR ', ') AS rel_event,
                                        ZONE, h.name AS manufacturer, i.name AS model, eqpt_mfg_date AS mfg_date, eqpt_asset_no AS asset_number, j.name AS new_transfer, k.name AS location, 
                                        eqpt_volt_rating, volt_control_accuracy, current_rating, power_rating, min_time_setting, max_time_setting, 
                                        min_temp, max_temp, min_rh, max_rh, min_pressure, max_pressure, heat_dissipation, temp_fluctuation, temp_uniformity,
                                        humid_fluctuation, ext_dimension_w, ext_dimension_d, ext_dimension_h, int_dimension_w, int_dimension_d, int_dimension_h, 
                                        diameter, no_interior_zone, rack_dimension_w, rack_dimension_d, rack_dimension_h, int_vol, l.name AS board_orientation, 
                                        m.name as rack_material, rack_slot_pitch, rack_slot_width, eqpt_weight, no_mb_slot, max_ps_slot, max_ps_eqpt, n.name as airflow,
                                        o.name as temp_protection_1, p.name as temp_protection_2, q.name as temp_protection_3, r.name as pressure_switch, s.name as safety_valve, t.name as smoke_alarm, u.name as emo_btn, 
                                        voltage, current, PHASE, v.name as exhaust, w.name as n2_gas, z.name as oxygen_level_detector, aa.name as liquid_nitrogen, bb.name as chilled_water, cc.name as di_water, 
                                        dd.name as water_topup_system, ee.name as cda, ff.name as lan, gg.name as daq, hh.name as internal_config_type, no_banana_jack_hole, conn_volt_rating, conn_current_rating, 
                                        conn_temp_rating, no_pin, pin_pitch, no_wire_conn_rack, wire_volt_rating, wire_curr_rating, wire_temp_rating, 
                                        ii.name as ext_config_type, interface_volt_rating, interface_current_rating
                                        FROM gest_form_eqpt AS eqpt
                                        LEFT JOIN gest_parameter_detail a ON a.CODE = eqpt_id
                                        LEFT JOIN gest_parameter_detail b ON b.CODE = lab_location
                                        LEFT JOIN gest_parameter_detail c ON c.CODE = strategy
                                        LEFT JOIN gest_parameter_detail d ON d.CODE = standard_category
                                        LEFT JOIN gest_parameter_detail e ON e.CODE = champion
                                        LEFT JOIN gest_parameter_detail f ON f.CODE = dedicate_usage
                                        LEFT JOIN gest_parameter_detail AS g ON FIND_IN_SET(g.CODE, eqpt.rel_test) > 0
                                        LEFT JOIN gest_parameter_detail h ON h.CODE = manufacturer
                                        LEFT JOIN gest_parameter_detail i ON i.CODE = eqpt_model
                                        LEFT JOIN gest_parameter_detail j ON j.CODE = new_transfer_eqpt
                                        LEFT JOIN gest_parameter_detail k ON k.CODE = transfer_eqpt_location
                                        LEFT JOIN gest_parameter_detail l ON l.CODE = board_orientation
                                        LEFT JOIN gest_parameter_detail m ON m.CODE = rack_material
                                        LEFT JOIN gest_parameter_detail n ON n.CODE = airflow
                                        LEFT JOIN gest_parameter_detail o ON o.CODE = temp_protection_1
                                        LEFT JOIN gest_parameter_detail p ON p.CODE = temp_protection_2
                                        LEFT JOIN gest_parameter_detail q ON q.CODE = temp_protection_3
                                        LEFT JOIN gest_parameter_detail r ON r.CODE = pressure_switch
                                        LEFT JOIN gest_parameter_detail s ON s.CODE = safety_valve
                                        LEFT JOIN gest_parameter_detail t ON t.CODE = smoke_alarm
                                        LEFT JOIN gest_parameter_detail u ON u.CODE = emo_btn
                                        LEFT JOIN gest_parameter_detail v ON v.CODE = exhaust
                                        LEFT JOIN gest_parameter_detail w ON w.CODE = n2_gas
                                        LEFT JOIN gest_parameter_detail z ON z.CODE = oxygen_level_detector
                                        LEFT JOIN gest_parameter_detail aa ON aa.CODE = liquid_nitrogen
                                        LEFT JOIN gest_parameter_detail bb ON bb.CODE = chilled_water
                                        LEFT JOIN gest_parameter_detail cc ON cc.CODE = di_water
                                        LEFT JOIN gest_parameter_detail dd ON dd.CODE = water_topup_system
                                        LEFT JOIN gest_parameter_detail ee ON ee.CODE = cda
                                        LEFT JOIN gest_parameter_detail ff ON ff.CODE = lan
                                        LEFT JOIN gest_parameter_detail gg ON gg.CODE = daq
                                        LEFT JOIN gest_parameter_detail hh ON hh.CODE = internal_config_type
                                        LEFT JOIN gest_parameter_detail ii ON ii.CODE = ext_config_type
                                        GROUP BY eqpt.id");
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    extract($row);
                    ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $eqpt_id ?></td>
                        <td><?php echo $lab_location ?></td>
                        <td><?php echo $product_group ?></td>
                        <td><?php echo $lab_manager ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </body>
</html>