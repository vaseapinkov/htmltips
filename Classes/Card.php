<?php

class Card
{
    private $id = '';
    private $title = '';
    private $description = '';
    private $date = '';
    private $link = '';

    public function setContent($id, $data)
    {
        $this->id = $id;
        $this->title = $data['title'];
        $this->description = substr($data['description'], 0, 70);
        $this->date = $data['date'];
        $this->link = $data['link'];

    }


    public function displayCard()
    {
        ?>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                     role="img" aria-label="Placeholder: Thumbnail"><title><?php echo $this->title?></title>
                    <rect width="100%" height="100%" fill="#55595c"/>
                    <text x="50%" y="50%" fill="#eceeef" dy=".3em"><?php echo $this->title?></text>
                </svg>
                <div class="card-body">
                    <p class="card-text"><?php echo $this->description?> ...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="pages/<?php echo $this->link?>?data=<?php echo $this->id?>" class="btn btn-sm btn-outline-secondary">More</a>
                        </div>
                        <small class="text-muted"><?php echo $this->date?></small>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

}