<div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon' ></i>
                        <span class="nav__logo-name"><?php echo $adm ? $nome." (ADM)" : $nome; ?></span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>
    
                            <a href="dashboard.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">Profile</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="cadastro.php" class="nav__dropdown-item">Usuarios</a>
                                        <a href="#" class="nav__dropdown-item">Mail</a>
                                        <a href="#" class="nav__dropdown-item">Accounts</a>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">Mensagens</span>
                            </a>
                        </div>
    
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>

                            <?php if($adm): ?>    
                                <div class="nav__dropdown">
                                    <a href="#" class="nav__link">
                                        <i class='bx bx-money nav__icon' ></i>
                                        <span class="nav__name">Financeiro</span>
                                        <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                    </a>

                                    <div class="nav__dropdown-collapse">
                                        <div class="nav__dropdown-content">
                                            <a href="#" class="nav__dropdown-item">Despesas Receitas</a>
                                            <a href="#" class="nav__dropdown-item">Fluxo Caixa</a>
                                            <a href="#" class="nav__dropdown-item">Lorem ipsum</a>
                                            <a href="#" class="nav__dropdown-item">Lorem ipsum</a>
                                        </div>
                                    </div>

                                </div>
                            <?php endif; ?>

                            <a href="#" class="nav__link">
                                <i class='bx bx-face nav__icon' ></i>
                                <span class="nav__name">Alunos</span>
                            </a>
                            <a href="#" class="nav__link">
                                <i class='bx bx-run nav__icon' ></i>
                                <span class="nav__name">Treino</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="acoes/logout.php" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Sair</span>
                </a>
            </nav>
        </div>