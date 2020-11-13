<?php

namespace vorge\TagPlugin;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

use onebone\economyapi\EconomyAPI;

class main extends PluginBase implements Listener {
    
    public function onEnable(){

    }

    public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {

        switch($cmd->getName()){
            case "tags":
                if($sender instanceof Player){
                    $this->tagui($sender);
                }
        }
    return true;
    }

    public function tagui($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0;
                    if($player->hasPermission("murder.tag")){
                        $player->setDisplayName("§c[§cMurder§c] §c" . $player->getName());
                        $player->sendMessage("§cMurder tag has been set to this account!")
                    } else {
                        $this->murdershop($player);
                        return true;
                    }

            break;
            
            case 1;
                if($player->hasPermission("zanity.tag")){
                    $player->setDisplayName("§5[§5ZANITY§5] §5" . $player->getName());
                    $player->sendMessage("§5ZANITY tag has been set to this account!")
                } else {
                    $this->zanityshop($player);
                    return true;
            }


             break;

            case 2;
            if($player->hasPermission("god.tag")){
                $player->setDisplayName("§6[§6GOD§6] §6" . $player->getName());
                $player->sendMessage("§6GOD tag has been set to this account!")
            } else {
                $this->godshop($player);
                return true;
            }


             break;

            case 3;
            if($player->hasPermission("og.tag")){
                $player->setDisplayName("§5[§5O§fG§f] §5" . $player->getName());
                $player->sendMessage("§5OG tag has been set to this account!")
            } else {
                $this->ogshop($player);
                return true;
            }


             break;

             case 4;
             if($player->hasPermission("trash.tag")){
                 $player->setDisplayName("§2[§2Trash§2] §2" . $player->getName());
                 $player->sendMessage("§2Trash tag has been set to this account!")
            } else {
                $this->trashshop($player);
                return true;
            }


             break;

             case 5;
             if($player->hasPermission("slime.tag")){
                 $player->setDisplayName("§a[§aSlime§a] §a" . $player->getName());
                 $player->sendMessage("§2Slime tag has been set to this account!")
            } else {
                $this->slimeshop($player);
                return true;
            }

            }
        });
        $form->setTittle("§cSuper §fCool §9TagShop");
        $form->setContent("§cSelect the super cool tag that you would like");
        $form->addButton("§c[§cMurder§c]");
        $form->addButton("§5[§5ZANITY§5]");
        $form->addButton("§6[§6GOD§6]");
        $form->addButton("§5[§5O§fG§f]");
        $form->addButton("§2[§2Trash§2]");
        $form->addButton("§a[§aSlime§a]");     
        $form->sendToPlayer($player);
        return $form; 
    }

    public function murdershop($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0;
                   $money = EconomyAPI::getInstance()->myMoney($player)
                   if($money >= 1000){
                       EconomyAPI::getInstance()->reduceMoney($player, 1000);
                       $player->addAttachment($this, "murder.tag", true);
                   } else {
                       $player->sendMessage("§cSir I belive you are broke come back and buy this when you can afford it!")
                   }
                break;
            
                case 1;

                break;

                case 2;

                break;

                case 3;
 
                break;

                case 4;
  
                break;

                case 5;

                break;
            }
        });
        $form->setTittle("§cSuper §fCool §9TagShop");
        $form->setContent("§cUm i dont think you own this product would you like to purchase it!");
        $form->addButton("§aYES BRO");
        $form->addButton("§c Nah");    
        $form->sendToPlayer($player);
        return $form; 
    }

    public function zanityshop($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0;
                   $money = EconomyAPI::getInstance()->myMoney($player)
                   if($money >= 1000){
                       EconomyAPI::getInstance()->reduceMoney($player, 1000);
                       $player->addAttachment($this, "zanity.tag", true);
                   } else {
                       $player->sendMessage("§cSir I belive you are broke come back and buy this when you can afford it!")
                   }
                break;
            
                case 1;

                break;

                case 2;

                break;

                case 3;
 
                break;

                case 4;
  
                break;

                case 5;

                break;
            }
        });
        $form->setTittle("§cSuper §fCool §9TagShop");
        $form->setContent("§cUm i dont think you own this product would you like to purchase it!");
        $form->addButton("§aYES BRO");
        $form->addButton("§c Nah");    
        $form->sendToPlayer($player);
        return $form; 
    }

    public function godshop($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0;
                   $money = EconomyAPI::getInstance()->myMoney($player)
                   if($money >= 1000){
                       EconomyAPI::getInstance()->reduceMoney($player, 1000);
                       $player->addAttachment($this, "god.tag", true);
                   } else {
                       $player->sendMessage("§cSir I belive you are broke come back and buy this when you can afford it!")
                   }
                break;
            
                case 1;

                break;

                case 2;

                break;

                case 3;
 
                break;

                case 4;
  
                break;

                case 5;

                break;
            }
        });
        $form->setTittle("§cSuper §fCool §9TagShop");
        $form->setContent("§cUm i dont think you own this product would you like to purchase it!");
        $form->addButton("§aYES BRO");
        $form->addButton("§c Nah");    
        $form->sendToPlayer($player);
        return $form; 
    }

    public function ogshop($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0;
                   $money = EconomyAPI::getInstance()->myMoney($player)
                   if($money >= 1000){
                      EconomyAPI::getInstance()->reduceMoney($player, 1000);
                       $player->addAttachment($this, "og.tag", true);
                   } else {
                       $player->sendMessage("§cSir I belive you are broke come back and buy this when you can afford it!")
                   }
                break;
            
                case 1;

                break;

                case 2;

                break;

                case 3;
 
                break;

                case 4;
  
                break;

                case 5;

                break;
            }
        });
        $form->setTittle("§cSuper §fCool §9TagShop");
        $form->setContent("§cUm i dont think you own this product would you like to purchase it!");
        $form->addButton("§aYES BRO");
        $form->addButton("§c Nah");    
        $form->sendToPlayer($player);
        return $form; 
    }

    public function trashshop($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0;
                   $money = EconomyAPI::getInstance()->myMoney($player)
                   if($money >= 1000){
                       EconomyAPI::getInstance()->reduceMoney($player, 1000);
                       $player->addAttachment($this, "trash.tag", true);
                   } else {
                       $player->sendMessage("§cSir I belive you are broke come back and buy this when you can afford it!")
                   }
                break;
            
                case 1;

                break;

                case 2;

                break;

                case 3;
 
                break;

                case 4;
  
                break;

                case 5;

                break;
            }
        });
        $form->setTittle("§cSuper §fCool §9TagShop");
        $form->setContent("§cUm i dont think you own this product would you like to purchase it!");
        $form->addButton("§aYES BRO");
        $form->addButton("§c Nah");    
        $form->sendToPlayer($player);
        return $form; 
    }

    public function slimeshop($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0;
                   $money = EconomyAPI::getInstance()->myMoney($player)
                   if($money >= 1000){
                       EconomyAPI::getInstance()->reduceMoney($player, 1000);
                       $player->addAttachment($this, "slime.tag", true);
                   } else {
                       $player->sendMessage("§cSir I belive you are broke come back and buy this when you can afford it!")
                   }
                break;
            
                case 1;

                break;

                case 2;

                break;

                case 3;
 
                break;

                case 4;
  
                break;

                case 5;

                break;
            }
        });
        $form->setTittle("§cSuper §fCool §9TagShop");
        $form->setContent("§cUm i dont think you own this product would you like to purchase it!");
        $form->addButton("§aYES BRO");
        $form->addButton("§c Nah");    
        $form->sendToPlayer($player);
        return $form; 
    }

}
