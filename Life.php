<?php

/**
 * Class Life represents a simulation of life events and the pursuit of peace.
 */
class Life
{
    /**
     * @var array $lifeStressors Array of life stressors with their respective stress values.
     */
    private $lifeStressors = [
        'Spilled coffee on yourself' => -10,
        'Misplaced your keys' => -15,
        'Had a minor disagreement with a friend' => -20,
        'Received a parking ticket' => -25,
        'Missed a bus or train' => -30,
        'Got stuck in a traffic jam' => -35,
        'Forgot to pay a bill on time' => -40,
        'Had a minor injury like stubbing your toe' => -45,
        'Received criticism at work' => -50,
        'Had a disagreement with a family member' => -55,
        'Got a flat tire' => -60,
        'Felt overwhelmed with daily tasks' => -65,
        'Dealt with a difficult customer service experience' => -70,
        'Had a computer or technology malfunction' => -75,
        'Experienced a power outage' => -80,
        'Faced a significant unexpected expense' => -85,
        'Lost a job unexpectedly' => -90,
        'Experienced a minor illness like a cold' => -95,
        'Dealt with a major car accident' => -100,
        'Lost a loved one' => -100,
    ];

    /**
     * @var array $lifeCelebrations Array of life celebrations with their respective excitement values.
     */
    private $lifeCelebrations = [
        'Found a dollar on the street' => 10,
        'Received a compliment from a stranger' => 15,
        'Enjoyed a nice cup of coffee in the morning' => 20,
        'Had a relaxing evening at home' => 25,
        'Received a small unexpected gift' => 30,
        'Met a friend for lunch' => 35,
        'Received positive feedback at work' => 40,
        'Completed a small task or goal' => 45,
        'Enjoyed a day with good weather' => 50,
        'Got tickets to a concert or event' => 55,
        'Had a fun night out with friends' => 60,
        'Celebrated a personal achievement' => 65,
        'Received recognition or an award' => 70,
        'Had a romantic dinner with a partner' => 75,
        'Went on a weekend getaway' => 80,
        'Received unexpected good news' => 85,
        'Celebrated a milestone birthday' => 90,
        'Achieved a long-term goal' => 95,
        'Got engaged or married' => 100,
        'Welcomed a new family member' => 100,
    ];

    /**
     * @var int $optimalPeaceLevel The optimal peace level to achieve.
     */
    private $optimalPeaceLevel = 0;

    /**
     * @var int $currentPeaceLevel The current peace level.
     */
    private $currentPeaceLevel = 0;

    /**
     * Finds peace amidst life's seemingly random events.
     */
    public function findPeace()
    {
        // Get a random stressor
        $randomStressorKey = array_rand($this->lifeStressors);
        $randomStressor = $this->lifeStressors[$randomStressorKey];

        // Get a random celebration
        $randomCelebrationKey = array_rand($this->lifeCelebrations);
        $randomCelebration = $this->lifeCelebrations[$randomCelebrationKey];

        // Calculate the current peace level
        if ($this->currentPeaceLevel > 0) {
            $this->currentPeaceLevel = $this->currentPeaceLevel + $randomStressor;
            echo "Bad News: $randomStressorKey (Value: $randomStressor)\n";
        } else if ($this->currentPeaceLevel < 0) {
            $this->currentPeaceLevel = $this->currentPeaceLevel + $randomCelebration;
            echo "Good News: $randomCelebrationKey (Value: $randomCelebration)\n";
        } else {
            $this->currentPeaceLevel = $randomCelebration + $randomStressor;
            echo "Bad News: $randomStressorKey (Value: $randomStressor)\n";
            echo "Good News: $randomCelebrationKey (Value: $randomCelebration)\n";
        }
        echo "Current Peace Level: $this->currentPeaceLevel\n";

        // Check if the current peace level is optimal
        if ($this->currentPeaceLevel == $this->optimalPeaceLevel) {
            echo "You have found peace! Enjoy this moment for as long as you can and then come back to continue when ready.\n";
        } else {
            echo "You have not found peace yet. Take a breath and keep on going.\n";
            sleep(2); // Pause execution for 2 seconds
            $this->findPeace();
        }
    }
}

// Example usage:
$me = new Life();
$me->findPeace();
