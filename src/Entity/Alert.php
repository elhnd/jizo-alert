<?php

namespace Sesame\Bundle\JizoAlerts\Entity;
use Doctrine\ORM\Mapping as ORM;

use JsonSerializable;

#[ORM\Entity(repositoryClass:"Sesame\Bundle\JizoAlerts\Repository\AlertRepository")]
#[ORM\Table(name:"AlertPusherBody")]
class Alert implements JsonSerializable 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer", name: "Idx")]
    private $idx;

    #[ORM\Column(type:"string", name: "RuleSidRev")]
    private $sidRev;

    #[ORM\Column(type:"string", name: "Content")]
    private $content;

    #[ORM\Column(type:"string", name: "Sid")]
    private $sid;

    #[ORM\Column(type:"string", name: "Rev")]
    private $rev;

    #[ORM\Column(type:"string", name: "Signature")]
    private $signature;

    #[ORM\Column(type:"string", name: "Category")]
    private $category;

    #[ORM\Column(type:"integer", name: "Severity")]
    private $severity;

    #[ORM\Column(type:"integer", name: "FlowId")]
    private $flowId;

    #[ORM\Column(type:"integer", name: "SrcIp")]
    private $srcIp;

    #[ORM\Column(type:"string", name: "SrcPort")]
    private $srcPort;

    #[ORM\Column(type:"string", name: "DestIp")]
    private $destIp;

    #[ORM\Column(type:"integer", name: "DestPort")]
    private $destPort;

    #[ORM\Column(type:"string", name: "Proto")]
    private $proto;

    #[ORM\Column(type:"string", name: "AppProto")]
    private $appProto;

    #[ORM\Column(type:"string", name: "Payload")]
    private $payload;

    #[ORM\Column(type:"string", name: "PayloadPrintable")]
    private $payloadPrintable;

    #[ORM\Column(type:"string", name: "Packet")]
    private $packet;

    #[ORM\Column(type:"string", name: "FlowBits")]
    private $flowbits;

    #[ORM\Column(type:"string", name: "DateTime")]
    private $dateTime;

    #[ORM\Column(type:"integer", name: "State")]
    private $state;

    #[ORM\Column(type:"string", name: "Comment")]
    private $comment;

    #[ORM\Column(type:"integer", name: "AlertCategory")]
    private $alertCategory;

    #[ORM\Column(type:"integer", name: "InvestigationConclusion")]
    private $investigationConclusion;

    #[ORM\Column(type:"integer", name: "Behaviour")]
    private $behaviour;

    #[ORM\Column(type:"integer", name: "VlanId")]
    private $vlanId;

    private $metadata;

    private $occurence;

    public function getIdx()
    {
        return $this->idx;
    }

    public function setIdx($idx)
    {
        $this->idx = $idx;
        return $this;
    }

    public function getSidRev()
    {
        return $this->sidRev;
    }

    public function setSidRev($sidRev)
    {
        $this->sidRev = $sidRev;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function getSid()
    {
        return $this->sid;
    }

    public function setSid($sid)
    {
        $this->sid = $sid;
        return $this;
    }

    public function getRev()
    {
        return $this->rev;
    }

    public function setRev($rev)
    {
        $this->rev = $rev;
        return $this;
    }

    public function getSignature()
    {
        return $this->signature;
    }

    public function setSignature($signature)
    {
        $this->signature = $signature;
        return $this;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    public function getSeverity()
    {
        return $this->severity;
    }

    public function setSeverity($severity)
    {
        $this->severity = $severity;
        return $this;
    }

    public function getFlowId()
    {
        return $this->flowId;
    }

    public function setFlowId($flowId)
    {
        $this->flowId = $flowId;
        return $this;
    }

    public function getSrcIp()
    {
        return $this->srcIp;
    }

    public function setSrcIp($srcIp)
    {
        $this->srcIp = $srcIp;
        return $this;
    }

    public function getSrcPort()
    {
        return $this->srcPort;
    }
 
    public function setSrcPort($srcPort)
    {
        $this->srcPort = $srcPort;
        return $this;
    }

    public function getDestIp()
    {
        return $this->destIp;
    }

    public function setDestIp($destIp)
    {
        $this->destIp = $destIp;
        return $this;
    }

    public function getDestPort()
    {
        return $this->destPort;
    }

    public function setDestPort($destPort)
    {
        $this->destPort = $destPort;
        return $this;
    }

    public function getproto()
    {
        return $this->proto;
    }

    public function setproto($proto)
    {
        $this->proto = $proto;
        return $this;
    }

    public function getAppProto()
    {
        return $this->appProto;
    }

    public function setAppProto($appProto)
    {
        $this->appProto = $appProto;
        return $this;
    }

    public function getPayload()
    {
        return $this->payload;
    }

    public function setPayload($payload)
    {
        $this->payload = $payload;
        return $this;
    }

    public function getPayloadPrintable()
    {
        return $this->payloadPrintable;
    }

    public function setPayloadPrintable($payloadPrintable)
    {
        $this->payloadPrintable = $payloadPrintable;
        return $this;
    }

    public function getPacket()
    {
        return $this->packet;
    }

    public function setPacket($packet)
    {
        $this->packet = $packet;
        return $this;
    }

    public function getFlowbits()
    {
        return $this->flowbits;
    }

    public function setFlowbits($flowbits)
    {
        $this->flowbits = $flowbits;
        return $this;
    }

    public function getDatetime()
    {
        return $this->dateTime;
    }

    public function setDatetime($datetime)
    {
        $this->dateTime = $datetime;
        return $this;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    public function getAlertCategory()
    {
        return $this->alertCategory;
    }

    public function setAlertCategory($alertCategory)
    {
        $this->alertCategory = $alertCategory;
        return $this;
    }


    public function getInvestigationConclusion()
    {
        return $this->investigationConclusion;
    }

    public function setInvestigationConclusion($investigationConclusion)
    {
        $this->investigationConclusion = $investigationConclusion;
        return $this;
    }

    public function getBehaviour()
    {
        return $this->behaviour;
    }

    public function setBehaviour($behaviour)
    {
        $this->behaviour = $behaviour;
        return $this;
    }

    public function getVlanId()
    {
        return $this->vlanId;
    }

    public function setVlanId($vlanId)
    {
        $this->vlanId = $vlanId;
        return $this;
    }

    public function getMetadata()
    {
        return $this->metadata;
    }

    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function getOccurence()
    {
        return $this->occurence;
    }

    public function setOccurence($occurence)
    {
        $this->occurence = $occurence;
        return $this;
    }

    public function jsonSerialize(): mixed
    {
        $toJson = [
            'idx' => $this->idx,
            'sidrev' => $this->sidRev,
            'content' => $this->content,
            'sid' => $this->sid,
            'rev' => $this->rev,
            'signature' => $this->signature,
            'category' => $this->category,
            'severity' => $this->severity,
            'flowId' => $this->flowId,
            'srcIp' => $this->srcIp,
            'srcPort' => $this->srcPort,
            'destIp' => $this->destIp,
            'destPort' => $this->destPort,
            'proto' => $this->proto,
            'appProto' => $this->appProto,
            'payload' => $this->payload,
            'payloadPrintable' => $this->payloadPrintable,
            'packet' => $this->packet,
            'flowbits' => $this->flowbits,
            'dateTime' => $this->dateTime,
            'state' => $this->state,
            'comment' => $this->comment,
            'alertCategory' => $this->alertCategory,
            'investigationConclusion' => $this->investigationConclusion,
            'behaviour' => $this->behaviour,
            'vlanId' => $this->vlanId,
            'metadata' => $this->metadata,
            'occurence' => $this->occurence
        ];

        return $toJson;
    }
}