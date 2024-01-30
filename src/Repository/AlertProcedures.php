<?php
namespace Sesame\Bundle\JizoAlerts\Repository;

class AlertProcedures {
    const GET_OCCURENCES = 
        'CALL getOccurences(
            :rule_sid_rev,
            :protocol,
            :content,
            :date_time_from,
            :date_time_to,
            :src_ip,
            :flow_id,
            :dest_ip,
            :dest_port,
            :src_port,
            :signature,
            :app_proto,
            :severity,
            :state,
            :alert_category,
            :investigation_conclusion,
            :flag,
            :sid_excluded,
            :vlan_id,
            :offset,
            :limit
        )';
}
