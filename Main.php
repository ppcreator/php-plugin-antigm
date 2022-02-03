<?php

 namespace code;

 use pocketmine\plugin\PluginBase;
 use pocketmine\event\Listener;
 use pocketmine\event\entity\EntityDamageByEntityEvent;
 use pocketmine\event\entity\EntityDamageEvent;
 use pocketmine\Player;

 class Main extends PluginBase implements Listener {

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
public function onAntiDamage(EntityDamageEvent $event){
  if($event instanceof EntityDamageByEntityEvent){
   $damager = $event->getDamager();
    if($damager instanceof Player){
     if($damager->isCreative() || $damager->getAllowFlight() == true){
      $damager->sendMessage("§l§c!§a * §r§You no damage to creative/fly");
        $event->setCancelled(true);
        }
      }
    }
  }
}
