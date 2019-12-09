<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private int $count;

    /**
     * Retourne le nombre de poneys
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Définit le nombre de poneys
     *
     * @param int $number Nouveau nombre de poneys
     * 
     * @return void
     */
    public function setCount(int $number): void
    {
        $this->count = $number;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if($number > $this->count){
            throw new \Exception("Cannot remove too much poneys", 403);
        }
        else{
            $this->count -= $number;
        }
    }

    /**
     * Ajoute un ou plusieurs poneys au champ
     *
     * @param int $number Nombre de poneys à ajouter
     *
     * @return void
     */
    public function addPoneyToField(int $number): void
    {
        $this->count += $number;
    }

    /**
     * Vérifie qu'il reste des places libres dans le champ
     *
     *
     * @return boolean
     */
    public function checkPlacesLibres(): bool
    {
        if($this->count >= 15){
            return false;
        }
        else {
            return true;
        }
    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }
}
?>
